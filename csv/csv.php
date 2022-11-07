<?php
// CSV extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/main/csv

class YellowCsv {
    const VERSION = "0.8.16";
    public $yellow;         //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("csvDirectory", "media/downloads/");
        $this->yellow->system->setDefault("csvDelimiter", "auto");
        $this->yellow->system->setDefault("csvFirstRowHeader", "1");
        $this->yellow->system->setDefault("csvFilter", "1");
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="csv" && ($type=="block" || $type=="inline")) {
            list($fileName, $class) = $this->yellow->toolbox->getTextArguments($text);
            $fileName = $this->yellow->toolbox->normalisePath($this->yellow->system->get("csvDirectory").$fileName);
            $fileData = $this->yellow->toolbox->readFile($fileName);
            if (!is_string_empty($fileData)) {
                $output = "<div class=\"".htmlspecialchars($name)."\" style=\"overflow-x:auto;\">\n";
                $output .= $this->getCsvHtml($fileData, $class);
                $output .= "</div>\n";
            } else {
                $this->yellow->page->error(500, "CSV '$fileName' does not exist!");
            }
        }
        if (substru($name, 0, 3)=="csv" && $type=="code") {
            list($language, $class, $id) = $this->getCsvInformation($name);
            if ($language=="csv" && !is_string_empty($text)) {
                $output = "<div class=\"".htmlspecialchars($language)."\"";
                if (!is_string_empty($id)) $output .= " id=\"".htmlspecialchars($id)."\"";
                $output .= " style=\"overflow-x:auto;\">\n";
                $output .= $this->getCsvHtml($text, $class);
                $output .= "</div>\n";
            }
        }
        return $output;
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header" && $this->yellow->system->get("csvFilter")) {
            $extensionLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreExtensionLocation");
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$extensionLocation}csv.js\"></script>\n";
        }
        return $output;
    }
    
    // Return CSV data, HTML encoded
    public function getCsvHtml($fileData, $class) {
        $output = "";
        $class = trim("csv-table $class");
        if ($this->yellow->system->get("csvFilter")) {
            $output .= "<p><input type=\"search\" class=\"light-table-filter\" data-table=\"csv-table\" placeholder=\"Filter\"></p>\n";
        }
        $output .= "<table class=\"".htmlspecialchars($class)."\">\n";
        $row = $this->yellow->system->get("csvFirstRowHeader") ? 0 : 1;
        $delimiter = $this->getCsvDelimiter($fileData);
        foreach ($this->yellow->toolbox->getTextLines($fileData) as $line) {
            $data = str_getcsv($line, $delimiter);
            if ($row==0) {
                $output .= "<thead><tr>\n";
            } else {
                $output .= "<tr>\n";
            }
            for ($column=0; $column<count($data); ++$column) {
                $value = trim($data[$column]);
                if ($row==0) {
                    $output .= "<th>".$value."</th>\n";
                } else {
                    $output .= "<td>".$value."</td>\n";
                }
            }
            if ($row==0) {
                $output .= "</tr></thead>\n";
            } else {
                $output .= "</tr>\n";
            }
            ++$row;
        }
        $output .= "</table>\n";
        return $this->yellow->toolbox->normaliseData($output, "html");
    }
    
    // Return CSV delimiter
    public function getCsvDelimiter($fileData) {
        $delimiter = $this->yellow->system->get("csvDelimiter");
        if ($delimiter=="auto") {
            $line = substru($fileData, 0, strposu($fileData, "\n"));
            $delimiterData = array(","=>0, ";"=>0, "|"=>0, "\t"=>0);
            foreach ($delimiterData as $key=>$value) {
                $delimiterData[$key] = substr_count($line, $key);
            }
            arsort($delimiterData);
            $delimiter = array_keys($delimiterData)[0];
        } else {
            $delimiter = str_replace("\\t", "\t", $delimiter);
        }
        return $delimiter;
    }
    
    // Return CSV information
    public function getCsvInformation($name) {
        $language = $class = $id = "";
        foreach (explode(" ", $name) as $token) {
            if (substru($token, 0, 3)=="csv" && is_string_empty($language)) $language = $token;
            if (substru($token, 0, 1)==".") $class = $class." ".substru($token, 1);
            if (substru($token, 0, 1)=="#") $id = substru($token, 1);
        }
        return array($language, $class, $id);
    }
}

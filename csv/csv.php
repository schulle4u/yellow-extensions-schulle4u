<?php
// CSV extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/csv
// Copyright (c) 2019 Steffen Schultz
// This file may be used and distributed under the terms of the public license.

class YellowCsv {
    const VERSION = "0.8.3";
    const TYPE = "feature";
    public $yellow;         //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("csvDir", "media/downloads/");
        $this->yellow->system->setDefault("csvDelimiter", ";");
        $this->yellow->system->setDefault("csvFirstRowHeader", "1");
        $this->yellow->system->setDefault("csvFilter", "1");
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="csv" && ($type=="block" || $type=="inline")) {
            list($file, $delimiter, $class) = $this->yellow->toolbox->getTextArgs($text);
            if (empty($delimiter)) $delimiter = $this->yellow->system->get("csvDelimiter");
            $delimiter = strreplaceu("\\t", "\t", $delimiter);
            if (empty($class)) $class = htmlspecialchars($name);
            $firstRowHeader = $this->yellow->system->get("csvFirstRowHeader");
            $output = "<div id=\"".htmlspecialchars($name)."\">\n";
            
            // get CSV
            $row = 0;
            $dir = $this->yellow->system->get("csvDir");
            if ($handle = @fopen($dir.$file, "r")) {
                // Prepare Table
                if ($this->yellow->system->get("csvFilter")) $output .= "<p><input type=\"search\" class=\"light-table-filter\" data-table=\"".htmlspecialchars($class)."\" placeholder=\"Filter\"></p>\n";
            
                $output .= "<table class=\"".htmlspecialchars($class)."\">\n";
                
                // loop
                while (($data = fgetcsv($handle, "1000", $delimiter)) !== false) {
                    $num = count($data);
                    if (($row == 0) && $firstRowHeader) {
                        $output .= "<thead><tr>\n";
                    } else {
                        $output .= "<tr>\n";
                    }
                    for ($c=0; $c < $num; $c++) {
                        if (empty($data[$c])) {
                            $value = "&nbsp;";
                        } else {
                            $value = $data[$c];
                        }
                        if (($row == 0) && $firstRowHeader) {
                            $output .= "<th>".htmlspecialchars($value)."</th>\n";
                        } else {
                            $output .= "<td>".htmlspecialchars($value)."</td>\n";
                        }
                    }
                    if (($row == 0) && $firstRowHeader) {
                        $output .= "</tr></thead><tbody>\n";
                    } else {
                        $output .= "</tr>\n";
                    }
                    $row++;

                }
                $output .= "</tbody></table>\n";
                fclose($handle);
            } else {
                $this->yellow->page->error(500, "File '$file' does not exist!");
            }
            $output .= "</div>\n";
        }
        return $output;
    }
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $extensionLocation = $this->yellow->system->get("serverBase").$this->yellow->system->get("extensionLocation");
            if ($this->yellow->system->get("csvFilter")) $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$extensionLocation}csv.js\"></script>\n";
        }
        return $output;
    }

}

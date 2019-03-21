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
            $output = "<div id=\"".htmlspecialchars($name)."\">";
            
            // get CSV
            $row = 0;
            $dir = $this->yellow->system->get("csvDir");
            if ($handle = @fopen($dir.$file, "r")) {
                // Prepare Table
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
                            $output .= "<th>".$value."</th>\n";
                        } else {
                            $output .= "<td>".$value."</td>\n";
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

}

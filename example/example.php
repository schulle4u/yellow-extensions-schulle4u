<?php
// Example plugin, https://github.com/schulle4u/yellow-plugins-schulle4u/tree/master/example
// Copyright (c) 2018 Example Name
// This file may be used and distributed under the terms of the public license.

class YellowExample {
    const VERSION = "0.7.6";
    public $yellow;         //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle page content parsing of custom block
    public function onParseContentBlock($page, $name, $text, $shortcut) {
        $output = null;
        if ($name=="example" && $shortcut) {
            $output = "<div class=\"".htmlspecialchars($name)."\">";
            $output .= "Add more HTML code here";
            $output .= "</div>";
        }
        return $output;
    }
    
    // Handle page extra HTML data
    public function onExtra($name) {
        $output = null;
        if ($name == "header") {
            $output = "<!-- Include additional CSS and JavaScript here -->\n";
        }
        if ($name == "footer") {
            $output = "<!-- Include large files here, after the content -->\n";
        }
        return $output;
    }
}

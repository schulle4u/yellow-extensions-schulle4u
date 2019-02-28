<?php
// Spoiler extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/spoiler
// Copyright (c) 2013-2018 Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowSpoiler {
    const VERSION = "0.8.3";
    const TYPE = "feature";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="spoilerstart" && ($type=="block" || $type=="inline")) {
            list($id, $label, $display) = $this->yellow->toolbox->getTextArgs($text);
            if (empty($id)) $id = "spoiler";
            if (empty($label)) $label = "…";
            if (empty($display)) $display = "none";
            $output = "<a onclick=\"toggle_hidden()\">".htmlspecialchars($label)."</a><br />\n";
            $output .= "<div id=\"".htmlspecialchars($id)."\" style=\"display:".htmlspecialchars($display)."\">\n";
        }
        if ($name=="spoilerstop" && ($type=="block" || $type=="inline")) {
            list($id) = $this->yellow->toolbox->getTextArgs($text);
            if (empty($id)) $id = "spoiler";
            $output .= "</div>\n";
            $output .= "<script type=\"text/javascript\">\n";
            $output .= "function toggle_hidden(){var e=document.getElementById(\"".htmlspecialchars($id)."\");\"none\"===e.style.display?e.style.display=\"block\":e.style.display=\"none\"}\n";
            $output .= "</script>\n";
        }
        
        return $output;
    }
}

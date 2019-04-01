<?php
// Spoiler extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/spoiler
// Copyright (c) 2018-2019 Steffen Schultz
// This file may be used and distributed under the terms of the public license.

class YellowSpoiler {
    const VERSION = "0.8.4";
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
            $button = $id."-btn";
            $output .= "<a id=\"".htmlspecialchars($button)."\" href=\"#\" onclick=\"toggle_hidden('".htmlspecialchars($id)."', '".htmlspecialchars($button)."')\"";
            if ($display == "none") {
                $output .= " aria-expanded=\"false\"";
            } else {
                $output .= " aria-expanded=\"true\"";
            }
            $output .= ">".htmlspecialchars($label)."</a><br />\n";
            $output .= "<div id=\"".htmlspecialchars($id)."\" style=\"display:".htmlspecialchars($display)."\">\n";
        }
        if ($name=="spoilerstop" && ($type=="block" || $type=="inline")) {
            list($id) = $this->yellow->toolbox->getTextArgs($text);
            if (empty($id)) $id = "spoiler";
            $button = $id."-btn";
            $output .= "</div>\n";
            $output .= "<script type=\"text/javascript\">\n";
            $output .= "function toggle_hidden(id, button){var x=document.getElementById(id);if(x.style.display===\"none\"){x.style.display=\"block\";document.getElementById(button).setAttribute(\"aria-expanded\",\"true\");}else{x.style.display=\"none\";document.getElementById(button).setAttribute(\"aria-expanded\",\"false\");}}\n";
            $output .= "</script>\n";
        }
        
        return $output;
    }
}

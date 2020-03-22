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
            $output .= "<a href=\"#\" class=\"spoiler-link\" data-spoiler-id=\"".htmlspecialchars($id)."\"";
            if ($display == "none") {
                $output .= " aria-expanded=\"false\"";
            } else {
                $output .= " aria-expanded=\"true\"";
            }
            $output .= ">".htmlspecialchars($label)."</a><br />\n";
            $output .= "<div class=\"spoiler-text\" id=\"".htmlspecialchars($id)."\" style=\"display:".htmlspecialchars($display)."\">\n";
        }
        if ($name=="spoilerstop" && ($type=="block" || $type=="inline")) {
            $output .= "</div>\n";
        }
        return $output;
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $extensionLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreExtensionLocation");
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$extensionLocation}spoiler.js\"></script>\n";
        }
        return $output;
    }

}

<?php
// Antispam extension, http://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/antispam
// Copyright (c) 2013-2020 Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowAntispam {
    const VERSION = "0.8.4";
    const TYPE = "feature";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = NULL;
        if ($name=="email" && ($type=="block" || $type=="inline")) {
            list($address, $text) = $this->yellow->toolbox->getTextArgs($text);
            if (empty($text)) $text = $address;
            $output = "<span class=\"antispam\" data-address=\"".htmlspecialchars(str_rot13($address))."\" data-text=\"".htmlspecialchars(str_rot13($text))."\" style=\"unicode-bidi:bidi-override; direction:rtl;\">".htmlspecialchars(strrev($address))."</span>";
        }
        return $output;
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $extensionLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreExtensionLocation");
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$extensionLocation}antispam.js\"></script>\n";
        }
        return $output;
    }
}

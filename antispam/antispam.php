<?php
// Antispam extension, http://github.com/schulle4u/yellow-extensions-schulle4u/tree/main/antispam

class YellowAntispam {
    const VERSION = "0.9.1";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle page content element
    public function onParseContentElement($page, $name, $text, $attributes, $type) {
        $output = null;
        if ($name=="email" && ($type=="block" || $type=="inline")) {
            list($address, $text) = $this->yellow->toolbox->getTextArguments($text);
            if (is_string_empty($text)) $text = $address;
            $output = "<span class=\"antispam\" data-address=\"".htmlspecialchars(str_rot13($address))."\" data-text=\"".htmlspecialchars(str_rot13($text))."\" style=\"unicode-bidi:bidi-override; direction:rtl;\">".htmlspecialchars(strrev($address))."</span>";
        }
        return $output;
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $assetLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreAssetLocation");
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$assetLocation}antispam.js\"></script>\n";
        }
        return $output;
    }
}

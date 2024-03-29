<?php
// Spoiler extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/main/spoiler

class YellowSpoiler {
    const VERSION = "0.8.8";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="spoilerstart" && ($type=="block" || $type=="inline")) {
            list($id, $label, $display) = $this->yellow->toolbox->getTextArguments($text);
            if (is_string_empty($id)) $id = "spoiler";
            if (is_string_empty($label)) $label = "…";
            if (is_string_empty($display)) $display = "none";
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

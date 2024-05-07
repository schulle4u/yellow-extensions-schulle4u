<?php
// Soundcloud extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/main/soundcloud

class YellowSoundcloud {
    const VERSION = "0.9.1";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("soundcloudStyle", "soundcloud");
    }
    
    // Handle page content element
    public function onParseContentElement($page, $name, $text, $attributes, $type) {
        $output = null;
        if ($name=="soundcloud" && ($type=="block" || $type=="inline")) {
            list($id, $style, $width, $height) = $this->yellow->toolbox->getTextArguments($text);
            if (is_string_empty($style)) $style = $this->yellow->system->get("soundcloudStyle");
            if (is_string_empty($width)) $width = "100%";
            if (is_string_empty($height)) $height = "166";
            $output = "<div class=\"".htmlspecialchars($style)."\">";
            $output .= "<iframe src=\"https://w.soundcloud.com/player/?url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F".rawurlencode($id)."\" frameborder=\"0\"";
            $output .= " width=\"".htmlspecialchars($width)."\" height=\"".htmlspecialchars($height)."\"";
            $output .= "></iframe></div>";
        }
        return $output;
    }
}

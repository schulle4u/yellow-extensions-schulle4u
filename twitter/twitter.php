<?php
// Twitter extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/main/twitter

class YellowTwitter {
    const VERSION = "0.8.7";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("twitterTheme", "light");
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="twitter" && ($type=="block" || $type=="inline")) {
            list($id, $theme, $style, $width, $height) = $this->yellow->toolbox->getTextArguments($text);
            if (is_string_empty($theme)) $theme = $this->yellow->system->get("twitterTheme");
            $language = $page->get("language");
            if (is_numeric($id)) {
                $output = "<div class=\"twitter\" data-mode=\"tweet\" data-id=\"".htmlspecialchars($id)."\" data-conversation=\"none\"";
                if (!is_string_empty($width)) $output .=" data-width=\"".htmlspecialchars($width)."\"";
                if (!is_string_empty($height)) $output .=" data-height=\"".htmlspecialchars($height)."\"";
                if (!is_string_empty($style)) $output .=" data-align=\"".htmlspecialchars($style)."\"";
                $output .= " data-theme=\"".htmlspecialchars($theme)."\" data-lang=\"$language\" data-dnt=\"true\"></div>";
            } else {
                $output = "<div class=\"twitter\" data-mode=\"timeline\" data-id=\"".htmlspecialchars($id)."\" data-chrome=\"noheader nofooter\"";
                if (!is_string_empty($width)) $output .=" data-width=\"".htmlspecialchars($width)."\"";
                if (!is_string_empty($height)) $output .=" data-height=\"".htmlspecialchars($height)."\"";
                if (!is_string_empty($style)) $output .=" data-align=\"".htmlspecialchars($style)."\"";
                $output .= " data-theme=\"".htmlspecialchars($theme)."\" data-lang=\"$language\" data-dnt=\"true\"></div>";
            }
        }
        if ($name=="twitterfollow" && ($type=="block" || $type=="inline")) {
            list($id, $dummy, $style) = $this->yellow->toolbox->getTextArguments($text);
            $language = $page->get("language");
            if (!is_string_empty($style)) $output .= "<div class=\"".htmlspecialchars($style)."\">";
            $output .= "<a class=\"twitter-follow-button\" data-size=\"large\"";
            $output .= " data-lang=\"$language\" data-dnt=\"true\" href=\"https://twitter.com/".rawurlencode($id)."\">@".htmlspecialchars($id)."</a>";
            if (!is_string_empty($style)) $output .= "</div>";
        }
        return $output;
    }

    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $extensionLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreExtensionLocation");
            $output = "<script type=\"text/javascript\" defer=\"defer\" src=\"{$extensionLocation}twitter.js\"></script>\n";
        }
        return $output;
    }
}

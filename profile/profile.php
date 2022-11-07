<?php
// Profile extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/main/profile

class YellowProfile {
    const VERSION = "0.8.10";
    public $yellow;            // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("profileLocation", "/profile/");
        $this->yellow->system->setDefault("profileStyle", "profile");
    }

    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="profile" && ($type=="block" || $type=="inline")) {
            list($author, $style) = $this->yellow->toolbox->getTextArguments($text);
            if (is_string_empty($style)) $style  = $this->yellow->system->get("profileStyle");
            $output .= "<div class=\"".htmlspecialchars($style)."\">\n";
            $location = $this->yellow->system->get("profileLocation");
            if($this->yellow->page->isExisting ("profile")) $profile = $this->yellow->page->get("profile");
            if (is_string_empty($profile)) {
                $author = $location;
            } else {
                $author = $location.$profile;
            }
            $page = $this->yellow->content->find($author);
            if ($page) {
                $output .= "<h2>".$page->getHtml("titleContent")."</h2>\n";
                $output .= $this->yellow->toolbox->createTextDescription($page->getContent(), 0, false, "<!--more-->", " <a href=\"".$page->getLocation(true)."\">".$this->yellow->language->getTextHtml("blogMore")."</a>\n");
            }
            $output .= "</div>\n";
        }
        return $output;
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="profiles") {
            $output = $this->onParseContentShortcut($page, "profile", "", "block");
        }
        return $output;
    }
}

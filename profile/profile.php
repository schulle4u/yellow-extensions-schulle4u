<?php
// Profile extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/main/profile

class YellowProfile {
    const VERSION = "0.9.1";
    public $yellow;            // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("profileLocation", "/profile/");
        $this->yellow->system->setDefault("profileStyle", "profile");
    }

    // Handle page content element
    public function onParseContentElement($page, $name, $text, $attributes, $type) {
        $output = null;
        if ($name=="profile" && ($type=="block" || $type=="inline")) {
            list($location, $style) = $this->yellow->toolbox->getTextArguments($text);
            if (is_string_empty($style)) $style  = $this->yellow->system->get("profileStyle");
            $output .= "<div class=\"".htmlspecialchars($style)."\">\n";
            if (is_string_empty($location)) {
                $location = $this->yellow->system->get("profileLocation");
            } else {
                $location = $this->yellow->system->get("profileLocation").$location;
            }
            $page = $this->yellow->content->find($location);
            if ($page) {
                $output .= "<h2>".$page->getHtml("titleContent")."</h2>\n";
                $output .= $this->yellow->toolbox->createTextDescription($page->getContentHtml(), 0, false, "<!--more-->", " <a href=\"".$page->getLocation(true)."\">".$this->yellow->language->getTextHtml("blogMore")."</a>\n");
            } else {
                $this->yellow->page->error(500, "Page '$location' does not exist!");
            }
            $output .= "</div>\n";
        }
        return $output;
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="profile") {
            $output = $this->onParseContentElement($page, "profile", "", "", "block");
        }
        return $output;
    }
}

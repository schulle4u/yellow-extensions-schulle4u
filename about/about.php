<?php
// About plugin, https://github.com/schulle4u/yellow-plugins-schulle4u/tree/master/about
// Copyright (c) 2018 Steffen Schultz
// This file may be used and distributed under the terms of the public license.

class YellowAbout {
    const VERSION = "0.7.9";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->config->setDefault("aboutLocation", "/profile/");
        $this->yellow->config->setDefault("aboutStyle", "about");
    }

    // Handle page content parsing of custom block
    public function onParseContentBlock($page, $name, $text, $shortcut) {
        $output = NULL;
        if ($name=="about" && $shortcut) {
            list($author, $style) = $this->yellow->toolbox->getTextArgs($text);
            if(empty($style)) $style  = $this->yellow->config->get("aboutStyle");
            $output .= "<div class=\"".htmlspecialchars($style)."\">\n";
            $location = $this->yellow->config->get("aboutLocation");
            if($this-> yellow->page->isExisting ("profile")) $profile = $this->yellow->page->getHtml("profile");
            if(empty($profile)) {
                $author = $location;
            } else {
                $author = $location.$profile;
            }
            $page = $this->yellow->pages->find($author);
            if ($page) {
                $output .= "<h3>".$page->getHtml("title")."</h3>\n";
                $output .= $this->yellow->toolbox->createTextDescription($page->getContent(), 0, false, "<!--more-->", " <a href=\"".$page->getLocation(true)."\">".$this->yellow->text->getHtml("blogMore")."</a>");
            }
            $output .= "</div>\n";
        }
        return $output;
    }
    
    // Handle page extra HTML data
    public function onExtra($name) {
        $output = null;
        if ($name=="links") {
            $output = $this->onParseContentBlock($page, "about", "", true);
        }
        return $output;
    }
}

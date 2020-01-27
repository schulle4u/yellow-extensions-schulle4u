<?php
// About extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/about
// Copyright (c) 2018 Steffen Schultz
// This file may be used and distributed under the terms of the public license.

class YellowAbout {
    const VERSION = "0.8.4";
    const TYPE = "feature";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("aboutLocation", "/about/");
        $this->yellow->system->setDefault("aboutStyle", "about");
    }

    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = NULL;
        if ($name=="about" && ($type=="block" || $type=="inline")) {
            list($author, $style) = $this->yellow->toolbox->getTextArgs($text);
            if(empty($style)) $style  = $this->yellow->system->get("aboutStyle");
            $output .= "<div class=\"".htmlspecialchars($style)."\">\n";
            $location = $this->yellow->system->get("aboutLocation");
            if($this->yellow->page->isExisting ("profile")) $profile = $this->yellow->page->getHtml("profile");
            if(empty($profile)) {
                $author = $location;
            } else {
                $author = $location.$profile;
            }
            $page = $this->yellow->content->find($author);
            if ($page) {
                $output .= "<h3>".$page->getHtml("title")."</h3>\n";
                $output .= $this->yellow->toolbox->createTextDescription($page->getContent(), 0, false, "<!--more-->", " <a href=\"".$page->getLocation(true)."\">".$this->yellow->text->getHtml("blogMore")."</a>");
            }
            $output .= "</div>\n";
        }
        return $output;
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="links") {
            $output = $this->onParseContentShortcut($page, "about", "", "block");
        }
        return $output;
    }
}

<?php
// Random extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/random
// Copyright (c) 2019 Steffen Schultz
// This file may be used and distributed under the terms of the public license.

class YellowRandom {
    const VERSION = "0.8.5";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("randomLocation", "/blog/");
        $this->yellow->system->setDefault("randomPagesMax", "5");
        $this->yellow->system->setDefault("randomMode", "list");
    }

    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="random" && ($type=="block" || $type=="inline")) {
            list($location, $pagesMax, $mode) = $this->yellow->toolbox->getTextArguments($text);
            if (empty($location)) $location = $this->yellow->system->get("randomLocation");
            if (strempty($pagesMax)) $pagesMax = $this->yellow->system->get("randomPagesMax");
            if (strempty($mode)) $mode = $this->yellow->system->get("randomMode");
            $this->yellow->page->setHeader("Cache-Control", "no-store, no-cache, must-revalidate");
            $output .= "<div class=\"".$name."\">\n";
            if ($mode == "list") $output .= "<ul>\n";
            $parent = $this->yellow->content->find($location);
            $pages = $parent ? $parent->getChildren(true) : $this->yellow->content->clean();
            foreach ($pages->shuffle()->limit($pagesMax) as $page) {
                if ($mode == "full") {
                    $output .= "<h2>".$page->getHtml("title")."</h2>\n";
                    $output .= $page->getContent();
                }
                if ($mode == "list") {
                    $output .= "<li><a href=\"".$page->getLocation(true)."\">".$page->getHtml("title")."</a></li>\n";
                }
                if ($mode == "teaser") {
                    $output .= "<h2><a href=\"".$page->getLocation(true)."\">".$page->getHtml("title")."</a></h2>\n";
                    $output .= $this->yellow->toolbox->createTextDescription($page->getContent(), 0, false, "<!--more-->", " <a href=\"".$page->getLocation(true)."\">".$this->yellow->language->getTextHtml("blogMore")."</a>");
                }
            }
            if ($mode == "list") $output .= "</ul>\n";
            
            $output .= "</div>\n";
        }
        return $output;
    }
}

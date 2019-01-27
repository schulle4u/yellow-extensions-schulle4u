<?php
// Random plugin, https://github.com/schulle4u/yellow-plugins-schulle4u/tree/master/random
// Copyright (c) 2019 Steffen Schultz
// This file may be used and distributed under the terms of the public license.

class YellowRandom {
    const VERSION = "0.7.3";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->config->setDefault("randomLocation", "/blog/");
        $this->yellow->config->setDefault("randomPagesMax", "5");
        $this->yellow->config->setDefault("randomMode", "list");
    }

    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = NULL;
        if ($name=="random" && ($type=="block" || $type=="inline")) {
            list($location, $pagesMax, $mode) = $this->yellow->toolbox->getTextArgs($text);
            if (empty($location)) $location = $this->yellow->config->get("randomLocation");
            if (strempty($pagesMax)) $pagesMax = $this->yellow->config->get("randomPagesMax");
            if (strempty($mode)) $mode = $this->yellow->config->get("randomMode");
            $this->yellow->page->setHeader("Cache-Control", "no-store, no-cache, must-revalidate");
            $output .= "<div class=\"".$name."\">\n";
            if ($mode == "list" || $mode == "1") $output .= "<ul>\n";
            $parent = $this->yellow->pages->find($location);
            $pages = $parent ? $parent->getChildren(true) : $this->yellow->pages->clean();
            foreach ($pages->shuffle()->limit($pagesMax) as $page) {
                if ($mode == "full" || $mode == "0") {
                    $output .= "<h2>".$page->getHtml("title")."</h2>\n";
                    $output .= $page->getContent();
                }
                if ($mode == "list" || $mode == "1") {
                    $output .= "<li><a href=\"".$page->getLocation(true)."\">".$page->getHtml("title")."</a></li>\n";
                }
                if ($mode == "teaser") {
                    $output .= "<h2><a href=\"".$page->getLocation(true)."\">".$page->getHtml("title")."</a></h2>\n";
                    $output .= $this->yellow->toolbox->createTextDescription($page->getContent(), 0, false, "<!--more-->", " <a href=\"".$page->getLocation(true)."\">".$this->yellow->text->getHtml("blogMore")."</a>");
                }
            }
            if ($mode == "list" || $mode == "1") $output .= "</ul>\n";
            
            $output .= "</div>\n";
        }
        return $output;
    }
}

<?php
// Random plugin, https://github.com/schulle4u/yellow-plugins-schulle4u/tree/master/random
// Copyright (c) 2013-2017 Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowRandom {
    const VERSION = "0.7.2";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->config->setDefault("randomLocation", "/blog/");
        $this->yellow->config->setDefault("randomPagesMax", "5");
        $this->yellow->config->setDefault("randomMode", "1");
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
            if ($mode == "0") {
                $parent = $this->yellow->pages->find($location);
                $pages = $parent ? $parent->getChildren(true) : $this->yellow->pages->clean();
                foreach ($pages->shuffle()->limit($pagesMax) as $page) {
                    $output .= "<h2>".$page->getHtml("title")."</h2>\n";
                    $output .= $page->getContent();
                } 
            } else {
                $output .= "<ul>\n";
                $parent = $this->yellow->pages->find($location);
                $pages = $parent ? $parent->getChildren() : $this->yellow->pages->clean();
                foreach ($pages->shuffle()->limit($pagesMax) as $page) {
                    $output .= "<li><a href=\"".$page->getUrl()."\">".$page->getHtml("title")."</a></li>\n";
                }
                $output .= "</ul>\n";
            }
            
            $output .= "</div>\n";
        }
        return $output;
    }
}

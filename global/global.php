<?php
// Global plugin, http://github.com/schulle4u/yellow-plugins-schulle4u/tree/master/global
// Copyright (c) 2013-2017 Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowGlobal {
    const VERSION = "0.7.5";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->config->setDefault("globalLocation", "/global/sidebar");
    }

    // Handle page content parsing of custom block
    public function onParseContentBlock($page, $name, $text, $shortcut) {
        $output = NULL;
        if ($name=="global" && $shortcut) {
            list($location, $mode) = $this->yellow->toolbox->getTextArgs($text);
            if (empty($location)) $location = $this->yellow->config->get("globalLocation");
            if (strempty($mode)) $mode = "0";
            $output .= "<div class=\"".$name."\">\n";
            $page = $this->yellow->pages->find($location);
            if ($page) {
                if ($mode == "1") {
                    $output .= "<h2><a href=\"".$page->getLocation(true)."\">".$page->getHtml("title")."</a></h2>\n";
                    $output .= $this->yellow->toolbox->createTextDescription($page->getContent(), 0, false, "<!--more-->", " <a href=\"".$page->getLocation(true)."\">".$this->yellow->text->getHtml("blogMore")."</a>");
                } else {
                    $output .= $page->getContent();
                }
            } else {
                $output .= "Page not found";
            }
            
            $output .= "</div>\n";
        }
        return $output;
    }
}

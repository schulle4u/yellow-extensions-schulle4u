<?php
// Message of the day plugin, https://github.com/schulle4u/yellow-plugins-schulle4u/tree/master/motd
// Copyright (c) 2013-2017 Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowMotd {
    const VERSION = "0.7.3";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }

    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = NULL;
        if ($name=="motd" && ($type=="block" || $type=="inline")) {
            $this->yellow->page->setHeader("Cache-Control", "no-store, no-cache, must-revalidate");
            $output .= "<div class=\"".htmlspecialchars($name)."\">\n";
            
            $dow = date("N");
            
            // Loop through the week
            switch($dow) {
                case 1:
                    if ($this->yellow->page->isExisting("motd1")) $output .= "<p>".$this->yellow->page->getHtml("motd1")."</p>\n";
                    break;
                case 2:
                    if ($this->yellow->page->isExisting("motd2")) $output .= "<p>".$this->yellow->page->getHtml("motd2")."</p>\n";
                    break;
                case 3:
                    if ($this->yellow->page->isExisting("motd3")) $output .= "<p>".$this->yellow->page->getHtml("motd3")."</p>\n";
                    break;
                case 4:
                    if ($this->yellow->page->isExisting("motd4")) $output .= "<p>".$this->yellow->page->getHtml("motd4")."</p>\n";
                    break;
                case 5:
                    if ($this->yellow->page->isExisting("motd5")) $output .= "<p>".$this->yellow->page->getHtml("motd5")."</p>\n";
                    break;
                case 6:
                    if ($this->yellow->page->isExisting("motd6")) $output .= "<p>".$this->yellow->page->getHtml("motd6")."</p>\n";
                    break;
                case 7:
                    if ($this->yellow->page->isExisting("motd7")) $output .= "<p>".$this->yellow->page->getHtml("motd7")."</p>\n";
                    break;
                }
                $output .="</div>\n";
            }
        return $output;
    }
}

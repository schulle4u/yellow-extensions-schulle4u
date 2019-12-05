<?php
// Refresh extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/refresh
// Copyright (c) 2019 Steffen Schultz
// This file may be used and distributed under the terms of the public license.

class YellowRefresh {
    const VERSION = "0.8.1";
    const TYPE = "feature";
    public $yellow;         //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("refreshTime", "5");
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="refresh" && ($type=="inline")) {
            $refreshTime = $page->getHtml("refreshTime");
            if (strempty($refreshTime)) $refreshTime = $this->yellow->system->get("refreshTime");
            $output = "<span id=\"countdown\">".$refreshTime."</span>";
        }
        return $output;
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name == "header" && $page->getHtml("refresh") && $this->yellow->getRequestHandler()=="core") {
            $refreshTime = $page->getHtml("refreshTime");
            if (strempty($refreshTime)) $refreshTime = $this->yellow->system->get("refreshTime");
            $output = "<meta http-equiv=\"refresh\" content=\"".$refreshTime."; URL=".$page->getHtml("refresh")."\">\n";
        }
        if ($name == "footer" && $page->getHtml("refresh")) {
            $output = "<script type=\"text/javascript\">\n";
            $output .= "var seconds=document.getElementById(\"countdown\").textContent;var countdown=setInterval(function(){seconds--;document.getElementById(\"countdown\").textContent=seconds;if(seconds<=0)clearInterval(countdown);},1000);\n";
            $output .= "</script>\n";
        }
        return $output;
    }
}

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
    
   
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name == "header" && $page->getHtml("refresh")) {
            $output = "<meta http-equiv=\"refresh\" content=\"".$this->yellow->system->get("refreshTime")."; URL=".$page->getHtml("refresh")."\">\n";
        }
        return $output;
    }
}

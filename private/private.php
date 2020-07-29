<?php
// Private extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/private
// Copyright (c) 2018-2019 Steffen Schultz
// This file may be used and distributed under the terms of the public license.

class YellowPrivate {
    const VERSION = "0.8.7";
    public $yellow;         //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }

    // Handle page meta data
    public function onParseMeta($page) {
        if ($page->get("status")=="private") $page->visible = false;
    }
    
    // Handle page layout
    public function onParsePageLayout($page, $name) {
        if ($this->yellow->page->get("status")=="private" && $this->yellow->getRequestHandler()=="core") {
            if ($this->yellow->page->isExisting("password") && $this->yellow->page->get("password")==trim($_REQUEST["password"])) {
                $this->yellow->page->setHeader("Last-Modified", $this->yellow->toolbox->getHttpDateFormatted(time()));
                $this->yellow->page->setHeader("Cache-Control", "no-cache, must-revalidate");
            } else {
                $pageError = "<form class=\"private-form\" action=\"".$this->yellow->page->getLocation(true)."\" method=\"post\">\n";
                $pageError .= "<p class=\"private-password\"><label for=\"password\">".$this->yellow->language->getTextHtml("editLoginPassword")."</label><br /><input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" /></p>\n";
                $pageError .= "<input type=\"submit\" value=\"".$this->yellow->language->getTextHtml("EditLoginButton")."\" class=\"btn login-btn\" />\n";
                $pageError .= "</form>\n";
                $this->yellow->page->error("401", $pageError);
            }
        }
    }
}

<?php
// Private plugin, https://github.com/schulle4u/yellow-plugins-schulle4u/tree/master/private
// Copyright (c) 2018 Steffen Schultz
// This file may be used and distributed under the terms of the public license.

class YellowPrivate {
    const VERSION = "0.7.10";
    public $yellow;         //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->config->setDefault("privateVisible", "");
    }

        // Handle page meta data
    public function onParseMeta($page) {
        if (!$this->yellow->config->get("privateVisible") && $page->get("status")=="private") $page->visible = false;
    }
    
    // Handle page template
    public function onParsePageTemplate($page, $name) {
        if ($this->yellow->page->get("status")=="private" && $this->yellow->getRequestHandler()=="core") {
            if (trim($_REQUEST["password"])!==$this->yellow->page->get("password")) {
                $pageError = "<form class=\"private-form\" action=\"".$this->yellow->page->getLocation(true)."\" method=\"post\">\n";
                $pageError .= "<p class=\"private-password\"><label for=\"password\">".$this->yellow->text->getHtml("editLoginPassword")."</label><br /><input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" value=\"".htmlspecialchars($_REQUEST["password"])."\" /></p>\n";
                $pageError .= "<input type=\"submit\" value=\"".$this->yellow->text->getHtml("EditLoginButton")."\" class=\"btn login-btn\" />\n";
                $pageError .= "</form>\n";
                $this->yellow->page->error("401", $pageError);
            } else {
                $this->yellow->page->set("status", "none");
            }
        }
    }

}

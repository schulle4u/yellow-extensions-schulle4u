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
        if (!$this->yellow->config->get("privateVisible") && $page->get("template")=="private") $page->visible = false;
    }
}

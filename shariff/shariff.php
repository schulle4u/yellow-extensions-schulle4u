<?php
// Shariff plugin, https://github.com/schulle4u/yellow-plugins-schulle4u/tree/master/shariff
// Copyright (c) 2013-2018 Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowShariff {
    const VERSION = "0.7.2";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->config->setDefault("shariffServices", "twitter, facebook, googleplus, info");
    }
    
    // Handle page content of custom block
    public function onParseContentBlock($page, $name, $text, $shortcut) {
        $output = null;
        if ($name=="shariff" && $shortcut) {
            list($services) = $this->yellow->toolbox->getTextArgs($text);
            if (empty($services)) $services = $this->yellow->config->get("shariffServices");
            $language = $page->get("language");
            $titleBugfix = preg_replace("/[&<>\"\']/", "-", $page->get("titleHeader")); //TODO: remove later: bugfix for Shariff 2.x
            $output = "<div class=\"shariff\" data-services=\"".htmlspecialchars(json_encode(preg_split("/\s*,\s*/", $services)))."\"";
            $output .= " data-lang=\"$language\" data-title=\"".htmlspecialchars($titleBugfix)."\"";
            $output .= "></div>";
            if (!$this->yellow->plugins->isExisting("fontawesome")) $page->error(500, "Shariff requires 'fontawesome' plugin!");
        }
        return $output;
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $pluginLocation = $this->yellow->config->get("serverBase").$this->yellow->config->get("pluginLocation");
            $output .= "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"{$pluginLocation}shariff.min.css\" />\n";
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$pluginLocation}shariff-complete.min.js\"></script>\n";
        }
        if ($name=="links") {
            $output = $this->onParseContentBlock($page, "shariff", "", true);
        }
        return $output;
    }
}

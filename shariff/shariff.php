<?php
// Shariff extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/shariff
// Copyright (c) 2013-2018 Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowShariff {
    const VERSION = "0.8.4";
    const TYPE = "feature";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("shariffServices", "twitter, facebook, info");
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="shariff" && ($type=="block" || $type=="inline")) {
            list($services) = $this->yellow->toolbox->getTextArgs($text);
            if (empty($services)) $services = $this->yellow->system->get("shariffServices");
            $language = $page->get("language");
            $titleBugfix = preg_replace("/[&<>\"\']/", "-", $page->get("titleHeader")); //TODO: remove later: bugfix for Shariff 2.x
            $output = "<div class=\"shariff\" data-services=\"".htmlspecialchars(json_encode(preg_split("/\s*,\s*/", $services)))."\"";
            $output .= " data-lang=\"$language\" data-title=\"".htmlspecialchars($titleBugfix)."\"";
            $output .= "></div>";
            if (!$this->yellow->extensions->isExisting("fontawesome")) $page->error(500, "Shariff requires 'fontawesome' extension!");
        }
        return $output;
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $extensionLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreExtensionLocation");
            $output .= "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"{$extensionLocation}shariff.min.css\" />\n";
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$extensionLocation}shariff-complete.min.js\"></script>\n";
        }
        if ($name=="links") {
            $output = $this->onParseContentShortcut($page, "shariff", "", "block");
        }
        return $output;
    }
}

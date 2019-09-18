<?php
// Pagesource extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/pagesource
// Copyright (c) 2019 Steffen Schultz
// This file may be used and distributed under the terms of the public license.

class YellowPagesource {
    const VERSION = "0.8.2";
    const TYPE = "feature";
    public $yellow;         //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("pagesourceStyle", "pagesource");
    }
    
    // Handle page layout
    public function onParsePageLayout($page, $name) {
        if ($_REQUEST["status"]=="source" && $this->yellow->getRequestHandler()=="core") {
            $this->yellow->page->setHeader("Content-Type", "text/plain; charset=utf-8");
            $this->yellow->page->set("status", "source");
            $title = $this->yellow->page->get("title");
            $titleLenght = strlenu($title);
            $output = $title."\r\n";
            $output .= str_pad("=", $titleLenght, "=")."\r\n";
            $output .= $this->yellow->page->getContent(true);
            $this->yellow->page->setOutput($output);
        } else {
            $this->yellow->page->set("status", "none");
        }
    }

    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="pagesource" && ($type=="block" || $type=="inline")) {
            list($style) = $this->yellow->toolbox->getTextArgs($text);
            if (empty($style)) $style = $this->yellow->system->get("pagesourceStyle");
            $output = "<div class=\"".htmlspecialchars($style)."\">\n";
            $output .= "<form class=\"pagesource-form\" action=\"".$this->yellow->page->getLocation(false)."\" method=\"post\">\n";
            $output .= "<input type=\"hidden\" name=\"status\" value=\"source\" />\n";
            $output .= "<input type=\"submit\" value=\"".$this->yellow->text->getHtml("EditToolbarPre")."\" class=\"btn source-btn\" />\n";
            $output .= "</form>\n";
            $output .= "</div>\n";
        }
        return $output;
    }
    
}

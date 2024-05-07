<?php
// Include extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/main/include

class YellowInclude {
    const VERSION = "0.9.1";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }

    // Handle page content element
    public function onParseContentElement($page, $name, $text, $attributes, $type) {
        $output = null;
        if ($name=="include" && ($type=="block" || $type=="inline")) {
            list($location, $mode) = $this->yellow->toolbox->getTextArguments($text);
            if (is_string_empty($mode)) $mode = "full";
            $output .= "<div class=\"".$name."\">\n";
            $page = $this->yellow->content->find($location);
            if ($page) {
                if ($mode == "teaser") {
                    $output .= "<h2><a href=\"".$page->getLocation(true)."\">".$page->getHtml("title")."</a></h2>\n";
                    $output .= $this->yellow->toolbox->createTextDescription($page->getContentHtml(), 0, false, "<!--more-->", " <a href=\"".$page->getLocation(true)."\">".$this->yellow->language->getTextHtml("blogMore")."</a>");
                } else {
                    $output .= $page->getContentHtml();
                }
            } else {
                $this->yellow->page->error(500, "Page '$location' does not exist!");
            }
            $output .= "</div>\n";
        }
        return $output;
    }
}

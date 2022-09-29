<?php
// Include extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/main/include

class YellowInclude {
    const VERSION = "0.8.5";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }

    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="include" && ($type=="block" || $type=="inline")) {
            list($location, $mode) = $this->yellow->toolbox->getTextArguments($text);
            if (empty($mode)) $mode = "full";
            $output .= "<div class=\"".$name."\">\n";
            $page = $this->yellow->content->find($location);
            if ($page) {
                if ($mode == "teaser") {
                    $output .= "<h2><a href=\"".$page->getLocation(true)."\">".$page->getHtml("title")."</a></h2>\n";
                    $output .= $this->yellow->toolbox->createTextDescription($page->getContent(), 0, false, "<!--more-->", " <a href=\"".$page->getLocation(true)."\">".$this->yellow->language->getTextHtml("blogMore")."</a>");
                } else {
                    $output .= $page->getContent();
                }
            } else {
                $this->yellow->page->error(500, "Page '$location' does not exist!");
            }
            
            $output .= "</div>\n";
        }
        
        return $output;
    }
}

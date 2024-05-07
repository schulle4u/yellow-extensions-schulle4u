<?php
// daily extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/main/daily

class YellowDaily {
    const VERSION = "0.9.1";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }

    // Handle page content element
    public function onParseContentElement($page, $name, $text, $attributes, $type) {
        $output = null;
        if ($name=="daily" && ($type=="block" || $type=="inline")) {
            list($day, $format) = $this->yellow->toolbox->getTextArguments($text);
            $this->yellow->page->setHeader("Cache-Control", "no-store, no-cache, must-revalidate");
            $output .= "<div class=\"".htmlspecialchars($name)."\">\n";
            if (is_string_empty($day)) $day  = date("N");
            if (is_string_empty($format)) $format = "teaser";
            switch($day) {
                case 1: $pages = $this->yellow->content->index()->filter("daily", "1"); break;
                case 2: $pages = $this->yellow->content->index()->filter("daily", "2"); break;
                case 3: $pages = $this->yellow->content->index()->filter("daily", "3"); break;
                case 4: $pages = $this->yellow->content->index()->filter("daily", "4"); break;
                case 5: $pages = $this->yellow->content->index()->filter("daily", "5"); break;
                case 6: $pages = $this->yellow->content->index()->filter("daily", "6"); break;
                case 7: $pages = $this->yellow->content->index()->filter("daily", "7"); break;
            }
            $this->yellow->page->setLastModified($pages->getModified());
            if ($format == "list") $output .= "<ul>\n";
            foreach ($pages as $page) {
                if ($format == "list") {
                    $output .= "<li><a href=\"".$page->getLocation(true)."\">".$page->getHtml("title")."</a></li>\n";
                } else {
                    $output .= "<h2><a href=\"".$page->getLocation(true)."\">".$page->getHtml("title")."</a></h2>\n";
                    $output .= $this->yellow->toolbox->createTextDescription($page->getContentHtml(), 0, false, "<!--more-->", " <a href=\"".$page->getLocation(true)."\">".$this->yellow->language->getTextHtml("blogMore")."</a>");
                }
            }
            if ($format == "list") $output .= "</ul>\n";
            $output .="</div>\n";
        }
        return $output;
    }
}

<?php
// daily extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/daily

class YellowDaily {
    const VERSION = "0.8.5";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }

    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="daily" && ($type=="block" || $type=="inline")) {
            $this->yellow->page->setHeader("Cache-Control", "no-store, no-cache, must-revalidate");
            $output .= "<div class=\"".htmlspecialchars($name)."\">\n";
            $day = date("N");
            switch($day) {
                case 1: $pages = $this->yellow->content->index(false)->filter("daily", "1"); break;
                case 2: $pages = $this->yellow->content->index(false)->filter("daily", "2"); break;
                case 3: $pages = $this->yellow->content->index(false)->filter("daily", "3"); break;
                case 4: $pages = $this->yellow->content->index(false)->filter("daily", "4"); break;
                case 5: $pages = $this->yellow->content->index(false)->filter("daily", "5"); break;
                case 6: $pages = $this->yellow->content->index(false)->filter("daily", "6"); break;
                case 7: $pages = $this->yellow->content->index(false)->filter("daily", "7"); break;
            }
            $this->yellow->page->setLastModified($pages->getModified());
            foreach ($pages as $page) {
                $output .= "<h2><a href=\"".$page->getLocation(true)."\">".$page->getHtml("title")."</a></h2>\n";
                $output .= $this->yellow->toolbox->createTextDescription($page->getContent(), 0, false, "<!--more-->", " <a href=\"".$page->getLocation(true)."\">".$this->yellow->language->getTextHtml("blogMore")."</a>");
            }
            $output .="</div>\n";
        }
        return $output;
    }
}

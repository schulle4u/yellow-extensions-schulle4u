<?php
// Ticker extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/ticker

class YellowTicker {
    const VERSION = "0.8.10";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("tickerShowDate", 1);
        $this->yellow->system->setDefault("tickerShowDescription", 1);
        $this->yellow->system->setDefault("tickerAdvancedParser", 0);
        $this->yellow->system->setDefault("tickerStyle", "ticker");
        $this->yellow->system->setDefault("tickerNumentries", 5);
    }
    
    // Handle update
    public function onUpdate($action) {
        if ($action=="clean" || $action=="daily" || $action=="uninstall") {
            $statusCode = 200;
            $path = $this->yellow->system->get("coreExtensionDirectory");
            foreach ($this->yellow->toolbox->getDirectoryEntries($path, "/^ticker-(.*)\.(spc|spi)$/", false, false) as $entry) {
                $expire = $action=="daily" ? ($this->yellow->toolbox->getFileModified($entry) + 60*60*24) : 0;
                if ($expire<=time() && !$this->yellow->toolbox->deleteFile($entry)) $statusCode = 500;
            }
            if ($statusCode==500) $this->yellow->log("error", "Can't delete files in directory '$path'!\n");
        }
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="ticker" && ($type=="block" || $type=="inline")) {
            list($rssurl, $numentries, $style) = $this->yellow->toolbox->getTextArguments($text);
            if (empty($style)) $style = $this->yellow->system->get("tickerStyle");
            if (strempty($numentries)) $numentries = $this->yellow->system->get("tickerNumentries");
            $n = 1;
            $showDate = $this->yellow->system->get("tickerShowDate");
            $showDescription = $this->yellow->system->get("tickerShowDescription");
            $output .= "<div class=\"".htmlspecialchars($style)."\">\n";
            $output .= "<ul>\n";
            if ($this->yellow->system->get("tickerAdvancedParser")) {
                $feed = new SimplePie();
                $feed->set_feed_url($rssurl);
                $feed->set_cache_location("./".$this->yellow->system->get("coreExtensionDirectory"));
                $feed->set_cache_name_function("YellowTicker::getCacheName");
                $feed->init();
                $feed->handle_content_type();
                foreach ($feed->get_items() as $item) {
                    $output .= "<li>";
                    $output .= "<a href = \"".$item->get_permalink()."\">".$item->get_title()."</a>";
                    if ($showDate) $output .= " - ".$item->get_date($this->yellow->language->getTextHtml("CoreDateFormatLong"));
                    if ($showDescription) $output .= "<br />".$item->get_description()." <a href=\"".$item->get_permalink()."\">".$this->yellow->language->getTextHtml("blogMore")."</a>";
                    $output .= "</li>\n";
                    if ($n>=$numentries) { break; }
                    $n++;
                }
            } elseif (function_exists("simplexml_load_file")) {
                $rss = @simplexml_load_file($rssurl);
                if ($rss->channel->item) {
                    foreach ($rss->channel->item as $item) {
                        $output .= "<li>";
                        $output .= "<a href = \"".$item->link."\">".$item->title."</a>";
                        if ($showDate) $output .= " - ".date($this->yellow->language->getTextHtml("CoreDateFormatLong"),strtotime($item->pubDate));
                        if ($showDescription) $output .= "<br />".$item->description." <a href=\"{$item->link}\">".$this->yellow->language->getTextHtml("blogMore")."</a>";
                        $output .= "</li>\n";
                        if ($n>=$numentries) { break; }
                        $n++;
                    }
                } else {
                    $output .= "<li>Unsupported feed format.</li>\n";
                }
                $output .= "</ul></div>\n";
            }
        }
        return $output;
    }
    
    // Return cache name
    public static function getCacheName($string) {
        return "ticker-".substru(md5($string), 0, 16);
    }
}

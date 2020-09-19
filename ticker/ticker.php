<?php
// Ticker extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/ticker
// Copyright (c) 2013-2017 Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowTicker {
    const VERSION = "0.8.8";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("tickerShowDate", 1);
        $this->yellow->system->setDefault("tickerShowDescription", 1);
        $this->yellow->system->setDefault("tickerAdvancedParser", 0);
        $this->yellow->system->setDefault("tickerStyle", "ticker");
        $this->yellow->system->setDefault("tickerNumentries", 5);
        extension_loaded("xml") || die("Datenstrom Yellow requires PHP XML extension!");
    }
    
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="ticker" && ($type=="block" || $type=="inline")) {
            list($rssurl,$numentries,$style) = $this->yellow->toolbox->getTextArguments($text);
            if (empty($style)) $style = $this->yellow->system->get("tickerStyle");
            if (strempty($numentries)) $numentries = $this->yellow->system->get("tickerNumentries");
            $n=1;
            $show_date = $this->yellow->system->get("tickerShowDate");
            $show_description = $this->yellow->system->get("tickerShowDescription");
            $output .= "<div class=\"".htmlspecialchars($style)."\">\n";
            $output .= "<ul>\n";
            if ($this->yellow->system->get("tickerAdvancedParser")) {
                
                // We'll process this feed with all of the default options.
                $feed = new SimplePie();
                
                // Set which feed to process.
                $feed->set_feed_url($rssurl);
                
                // Cache location
                if (!is_dir($this->yellow->system->get("coreCacheDir"))) @mkdir($this->yellow->system->get("coreCacheDir"), 0777, true);
                $feed->set_cache_location($this->yellow->system->get("coreCacheDir"));
                
                // Run SimplePie.
                $feed->init();
                
                // This makes sure that the content is sent to the browser as text/html and the UTF-8 character set (since we didn't change it).
                $feed->handle_content_type();
                
                // Loop through the entries
                foreach ($feed->get_items() as $item) {
                    $output .= "<li>";
                    $output .= "<a href = \"".$item->get_permalink()."\">".$item->get_title()."</a>";
                    if ($show_date) $output .= " - ".$item->get_date($this->yellow->language->getTextHtml("CoreDateFormatLong"));
                    if ($show_description) $output .= "<br />".$item->get_description()." <a href=\"".$item->get_permalink()."\">".$this->yellow->language->getTextHtml("blogMore")."</a>";
                    $output .= "</li>\n";
                    if ($n>=$numentries) { break; }
                    $n++;
                }
            } elseif ($rss = @simplexml_load_file($rssurl)) {
                if ($rss->channel->item) {
                    foreach ($rss->channel->item as $item) {
                        $output .= "<li>";
                        $output .= "<a href = \"".$item->link."\">".$item->title."</a>";
                        if ($show_date) $output .= " - ".date($this->yellow->language->getTextHtml("CoreDateFormatLong"),strtotime($item->pubDate));
                        if ($show_description) $output .= "<br />".$item->description." <a href=\"{$item->link}\">".$this->yellow->language->getTextHtml("blogMore")."</a>";
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
}

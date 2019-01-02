<?php
// Ticker plugin, https://github.com/schulle4u/yellow-plugins-schulle4u/tree/master/ticker
// Copyright (c) 2013-2017 Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowTicker {
    const VERSION = "0.7.2";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->config->setDefault("tickerShowDate", 1);
        $this->yellow->config->setDefault("tickerShowDescription", 1);
        $this->yellow->config->setDefault("tickerAdvancedParser", 0);
        $this->yellow->config->setDefault("tickerStyle", "ticker");
        $this->yellow->config->setDefault("tickerNumentries", 5);
    }
    
    
    // Handle page content parsing of custom block
    public function onParseContentBlock($page, $name, $text, $shortcut) {
        $output = NULL;
        if ($name=="ticker" && $shortcut) {
            list($rssurl,$numentries,$style) = $this->yellow->toolbox->getTextArgs($text);
            if (empty($style)) $style = $this->yellow->config->get("tickerStyle");
            if (strempty($numentries)) $numentries = $this->yellow->config->get("tickerNumentries");
            $n=1;
            $show_date = $this->yellow->config->get("tickerShowDate");
            $show_description = $this->yellow->config->get("tickerShowDescription");
            $output .= "<div class=\"".htmlspecialchars($style)."\">\n";
            $output .= "<ul>\n";
            if ($this->yellow->config->get("tickerAdvancedParser") && file_exists($this->yellow->config->get("pluginDir")."SimplePie.compiled.php")) {
                require_once($this->yellow->config->get("pluginDir")."SimplePie.compiled.php");
                
                // We'll process this feed with all of the default options.
                $feed = new SimplePie();
                
                // Set which feed to process.
                $feed->set_feed_url($rssurl);
                
                // Cache location
                $feed->set_cache_location($this->yellow->config->get("pluginDir")."cache");
                
                // Run SimplePie.
                $feed->init();
                
                // This makes sure that the content is sent to the browser as text/html and the UTF-8 character set (since we didn't change it).
                $feed->handle_content_type();
                
                // Loop through the entries
                foreach ($feed->get_items() as $item) {
                    $output .= "<li>";
                    $output .= "<a href = \"".$item->get_permalink()."\">".$item->get_title()."</a>";
                    if ($show_date) {
                        $output .= " - ".$item->get_date($this->yellow->text->getHtml("DateFormatLong"));
                    }
                    if ($show_description) {
                        $output .= "<br />".$item->get_description();
                        $output .= "<a href=\"".$item->get_permalink()."\">".$this->yellow->text->getHtml("blogMore")."</a>";
                    }
                    $output .= "</li>\n";
                    if ($n>=$numentries) { break; }
                    $n++;
                }
            } elseif ($rss = @simplexml_load_file($rssurl)) {
                if ($rss->channel->item) {
                    foreach ($rss->channel->item as $item) {
                        $output .= "<li>";
                        $output .= "<a href = \"".$item->link."\">".$item->title."</a>";
                        if ($show_date) {
                            $output .= " - ".date($this->yellow->text->getHtml("DateFormatLong"),strtotime($item->pubDate));
                        }
                        if ($show_description) {
                            $output .= "<br />".$item->description;
                            $output .= "<a href=\"{$item->link}\">".$this->yellow->text->getHtml("blogMore")."</a>";
                        }
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

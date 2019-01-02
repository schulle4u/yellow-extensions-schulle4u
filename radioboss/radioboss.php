<?php
// Radioboss plugin, https://github.com/schulle4u/yellow-plugins-schulle4u/tree/master/radioboss 
// Copyright (c) 2013-2018 Datenstrom, https://datenstrom.se 
// This file may be used and distributed under the terms of the public license.

class YellowRadioboss {
    const VERSION = "0.7.2";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->config->setDefault("radiobossServer", "c2.radioboss.fm"); // only the hostname without https
        $this->yellow->config->setDefault("radiobossPort", ""); // The actual streaming port
        $this->yellow->config->setDefault("radiobossPort2", "1" . $this->yellow->config->get("radiobossPort")); // Second icecast port for encrypted connections
        $this->yellow->config->setDefault("radiobossMount", "stream"); // file name Without slash
        $this->yellow->config->setDefault("radiobossId", ""); // Currently this are the last two digits of the port number
        $this->yellow->config->setDefault("radiobossListeners", "0");
        $this->yellow->config->setDefault("radiobossStyle", "radioboss");
    }

    // Handle page content parsing of custom block
    public function onParseContentBlock($page, $name, $text, $shortcut) {
        $output = NULL;
        if ($name=="radioboss" && $shortcut) {
            list($type, $style, $server, $port, $port2, $id, $mount) = $this->yellow->toolbox->getTextArgs($text);
            if (empty($type)) $type = "page";
            if (empty($style)) $style = $this->yellow->config->get("radiobossStyle");
            if (empty($server)) $server = $this->yellow->config->get("radiobossServer");
            if (empty($port)) $port = $this->yellow->config->get("radiobossPort");
            if (empty($port2)) $port2 = $this->yellow->config->get("radiobossPort2");
            if (empty($id)) $id = $this->yellow->config->get("radiobossId");
            if (empty($mount)) $mount = $this->yellow->config->get("radiobossMount");
            $listeners = $this->yellow->config->get("radiobossListeners");
            
            $output .= "<div class=\"".htmlspecialchars($style)."\">\n";
            
            // Widget code
            if ($type == "player") {
                $output .= "<div id=\"rbcloud_player\"></div>\n";
                $output .= "<script src=\"https://".htmlspecialchars($server)."/w/player.js?u=https%3A%2F%2F".htmlspecialchars($server)."%3A".htmlspecialchars($port2)."%2F".htmlspecialchars($mount)."\"></script>\n";
            }
            if ($type == "nowplaying") {
                $output .= "<div id=\"rbcloud_nowplaying\"></div>\n";
                if ($listeners) $output .= "<div>Listeners: <span id=\"rbcloud_listeners\">...</span></div>\n";
                $output .= "<script src=\"https://".htmlspecialchars($server)."/w/nowplaying.js?u=".htmlspecialchars($id)."\"></script>\n";
            } 
            if ($type == "cover") {
                $output .= "<img id=\"rbcloud_cover\" src=\"https://".htmlspecialchars($server)."/w/artwork/".htmlspecialchars($id).".png\" width=\"150\" height=\"150\">\n";
                $output .= "<script src=\"https://".htmlspecialchars($server)."/w/cover.js?u=".htmlspecialchars($id)."\"></script>\n";
            } 
            if ($type == "recent") {
                $output .= "<div id=\"rbcloud_recent\"></div>\n";
                $output .= "<script src=\"https://".htmlspecialchars($server)."/w/recent.js?u=".htmlspecialchars($id)."\"></script>\n";
            } 
            if ($type == "links") {
                $output .= "<ul id=\"rbcloud_tuneinlinks\">\n";
                $output .= "<li><a href=\"http://".htmlspecialchars($server).":".htmlspecialchars($port)."/".htmlspecialchars($mount).".m3u\">M3U Playlist</a></li>\n";
                $output .= "<li><a href=\"https://".htmlspecialchars($server).":".htmlspecialchars($port2)."/".htmlspecialchars($mount)."\">Direct stream link</a></li>\n";
                $output .= "<li><a href=\"https://".htmlspecialchars($server)."/".htmlspecialchars($mount)."/".htmlspecialchars($id)."\">Web port link</a></li>\n";
                $output .= "</ul>\n";
            }
            if ($type == "page") {
                $output .= "<a href=\"https://".htmlspecialchars($server)."/u/".htmlspecialchars($id)."\">Stream page</a>\n";
            }
            
            $output .= "</div>\n";
        }
        return $output;
    }
}

<?php
// Radioboss extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/radioboss 
// Copyright (c) 2013-2018 Datenstrom, https://datenstrom.se 
// This file may be used and distributed under the terms of the public license.

class YellowRadioboss {
    const VERSION = "0.8.3";
    const TYPE = "feature";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("radiobossServer", "c2.radioboss.fm"); // only the hostname without https
        $this->yellow->system->setDefault("radiobossPort", ""); // The actual streaming port
        $this->yellow->system->setDefault("radiobossPort2", "1" . $this->yellow->system->get("radiobossPort")); // Second icecast port for encrypted connections
        $this->yellow->system->setDefault("radiobossMount", "stream"); // file name Without slash
        $this->yellow->system->setDefault("radiobossId", ""); // Currently this are the last two digits of the port number
        $this->yellow->system->setDefault("radiobossListeners", "0");
        $this->yellow->system->setDefault("radiobossStyle", "radioboss");
    }

    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = NULL;
        if ($name=="radioboss" && ($type=="block" || $type=="inline")) {
            list($type, $style, $server, $port, $port2, $id, $mount) = $this->yellow->toolbox->getTextArgs($text);
            if (empty($type)) $type = "page";
            if (empty($style)) $style = $this->yellow->system->get("radiobossStyle");
            if (empty($server)) $server = $this->yellow->system->get("radiobossServer");
            if (empty($port)) $port = $this->yellow->system->get("radiobossPort");
            if (empty($port2)) $port2 = $this->yellow->system->get("radiobossPort2");
            if (empty($id)) $id = $this->yellow->system->get("radiobossId");
            if (empty($mount)) $mount = $this->yellow->system->get("radiobossMount");
            $listeners = $this->yellow->system->get("radiobossListeners");
            
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

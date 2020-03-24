<?php
// Radioboss extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/radioboss 
// Copyright (c) 2013-2020 Datenstrom, https://datenstrom.se 
// This file may be used and distributed under the terms of the public license.

class YellowRadioboss {
    const VERSION = "0.8.7";
    const TYPE = "feature";
    public $yellow;            //access to API
    public $outputFooter;      //generated output for footer
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("radiobossServer", "c2.radioboss.fm"); // only the hostname without https
        $this->yellow->system->setDefault("radiobossPort", ""); // The actual streaming port
        $this->yellow->system->setDefault("radiobossPort2", "1" . $this->yellow->system->get("radiobossPort")); // Second icecast port for encrypted connections
        $this->yellow->system->setDefault("radiobossMount", "stream"); // file name Without slash
        $this->yellow->system->setDefault("radiobossId", ""); // Currently this are the last two digits of the port number
        $this->yellow->system->setDefault("radiobossListeners", "0");
        $this->yellow->system->setDefault("radiobossTrackCount", "10");
        $this->yellow->system->setDefault("radiobossStyle", "radioboss");
    }

    // Handle request
    public function onRequest($scheme, $address, $base, $location, $fileName) {
        $statusCode = 0;
        $this->outputFooter = "";
        return $statusCode;
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="radioboss" && ($type=="block" || $type=="inline")) {
            list($widget, $arguments, $style, $server, $port, $port2, $id, $mount) = $this->yellow->toolbox->getTextArgs($text);
            if (empty($widget)) $widget = "page";
            if (empty($style)) $style = $this->yellow->system->get("radiobossStyle");
            if (empty($server)) $server = $this->yellow->system->get("radiobossServer");
            if (empty($port)) $port = $this->yellow->system->get("radiobossPort");
            if (empty($port2)) $port2 = $this->yellow->system->get("radiobossPort2");
            if (empty($id)) $id = $this->yellow->system->get("radiobossId");
            if (empty($mount)) $mount = $this->yellow->system->get("radiobossMount");
            $listeners = $this->yellow->system->get("radiobossListeners");
            $wid = mt_rand(100, 9999);
            $output .= "<div class=\"".htmlspecialchars($style)."\">\n";
            if ($widget == "miniplayer") {
                $argumentData = explode(" ", $arguments);
                if (strempty($argumentData[0])) $argumentData[0] = "86";
                if (empty($argumentData[1])) $argumentData[1] = "#111111";
                if (empty($argumentData[2])) $argumentData[2] = "#b3b3b3";
                $output .= "<div id=\"rbcloud_mplayer".htmlspecialchars($wid)."\"></div>\n";
                $this->outputFooter .= "<script src=\"https://".htmlspecialchars($server)."/w/mplayer.js?u=https%3A%2F%2F".htmlspecialchars($server)."%3A".htmlspecialchars($port2)."%2F".htmlspecialchars($mount)."&amp;wid=".htmlspecialchars($wid)."&amp;pw=".htmlspecialchars($argumentData[0])."&amp;ca=".rawurlencode($argumentData[1])."&amp;cg=".rawurlencode($argumentData[2])."\"></script>\n";
            }
            if ($widget == "player") {
                $output .= "<div id=\"rbcloud_player".htmlspecialchars($wid)."\"></div>\n";
                $this->outputFooter .= "<script src=\"https://".htmlspecialchars($server)."/w/player.js?u=https%3A%2F%2F".htmlspecialchars($server)."%3A".htmlspecialchars($port2)."%2F".htmlspecialchars($mount)."&amp;wid=".htmlspecialchars($wid)."\"></script>\n";
            }
            if ($widget == "nowplaying") {
                $output .= "<div id=\"rbcloud_nowplaying".htmlspecialchars($wid)."\"></div>\n";
                if ($listeners) $output .= "<div>Listeners: <span id=\"rbcloud_listeners".htmlspecialchars($wid)."\">...</span></div>\n";
                $this->outputFooter .= "<script src=\"https://".htmlspecialchars($server)."/w/nowplaying.js?u=".htmlspecialchars($id)."&amp;wid=".htmlspecialchars($wid).(empty($listeners) ? "&amp;nl=1" : "")."\"></script>\n";
            }
            if ($widget == "cover") {
                $output .= "<img id=\"rbcloud_cover".htmlspecialchars($wid)."\" src=\"https://".htmlspecialchars($server)."/w/artwork/".htmlspecialchars($id).".png\" width=\"150\" height=\"150\" alt=\"Cover Art\">\n";
                $this->outputFooter .= "<script src=\"https://".htmlspecialchars($server)."/w/cover.js?u=".htmlspecialchars($id)."&amp;wid=".htmlspecialchars($wid)."\"></script>\n";
            }
            if ($widget == "recent") {
                if (empty($arguments)) $arguments = $this->yellow->system->get("radiobossTrackCount");
                $output .= "<div id=\"rbcloud_recent".htmlspecialchars($wid)."\" data-cnt=\"".htmlspecialchars($arguments)."\"></div>\n";
                $this->outputFooter .= "<script src=\"https://".htmlspecialchars($server)."/w/recent.js?u=".htmlspecialchars($id)."&amp;wid=".htmlspecialchars($wid)."\"></script>\n";
            }
            if ($widget == "links") {
                $output .= "<ul id=\"rbcloud_tuneinlinks\">\n";
                $output .= "<li><a href=\"http://".htmlspecialchars($server).":".htmlspecialchars($port)."/".htmlspecialchars($mount).".m3u\">M3U Playlist</a></li>\n";
                $output .= "<li><a href=\"https://".htmlspecialchars($server).":".htmlspecialchars($port2)."/".htmlspecialchars($mount)."\">Direct stream link</a></li>\n";
                $output .= "<li><a href=\"https://".htmlspecialchars($server)."/".htmlspecialchars($mount)."/".htmlspecialchars($id)."\">Web port link</a></li>\n";
                $output .= "</ul>\n";
            }
            if ($widget == "page") {
                $output .= "<a href=\"https://".htmlspecialchars($server)."/u/".htmlspecialchars($id)."\">Stream page</a>\n";
            }
            
            $output .= "</div>\n";
        }
        return $output;
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="footer") $output = $this->outputFooter;
        return $output;
    }
}

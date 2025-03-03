<?php
// Radioboss extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/main/radioboss 

class YellowRadioboss {
    const VERSION = "0.9.1";
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
        $this->yellow->system->setDefault("radiobossNexttrack", "0");
        $this->yellow->system->setDefault("radiobossTrackCount", "10");
        $this->yellow->system->setDefault("radiobossStyle", "radioboss");
        $this->yellow->language->setDefaults(array(
            "Language: en",
            "RadiobossDescription: Widgets for RadioBoss Cloud.",
            "RadiobossListeners: Listeners",
            "RadiobossNexttrack: Next track",
            "Language: de",
            "RadiobossDescription: Widgets für RadioBoss Cloud.",
            "RadiobossListeners: Zuhörer",
            "RadiobossNexttrack: Nächster Titel",
            "Language: sv",
            "RadiobossDescription: Widgets för RadioBoss Cloud.",
            "RadiobossListeners: Lyssnare",
            "RadiobossNexttrack: Nästa låt"));
    }
    
    // Handle request
    public function onRequest($scheme, $address, $base, $location, $fileName) {
        $statusCode = 0;
        $this->outputFooter = "";
        return $statusCode;
    }
    
    // Handle page content element
    public function onParseContentElement($page, $name, $text, $attributes, $type) {
        $output = null;
        if ($name=="radioboss" && ($type=="block" || $type=="inline")) {
            list($widget, $arguments, $style, $server, $port, $port2, $id, $mount) = $this->yellow->toolbox->getTextArguments($text);
            if (is_string_empty($widget)) $widget = "page";
            if (is_string_empty($style)) $style = $this->yellow->system->get("radiobossStyle");
            if (is_string_empty($server)) $server = $this->yellow->system->get("radiobossServer");
            if (is_string_empty($port)) $port = $this->yellow->system->get("radiobossPort");
            if (is_string_empty($port2)) $port2 = $this->yellow->system->get("radiobossPort2");
            if (is_string_empty($id)) $id = $this->yellow->system->get("radiobossId");
            if (is_string_empty($mount)) $mount = $this->yellow->system->get("radiobossMount");
            $listeners = $this->yellow->system->get("radiobossListeners");
            $nexttrack = $this->yellow->system->get("radiobossNexttrack");
            $wid = mt_rand(100, 9999);
            $output .= "<div class=\"".htmlspecialchars($style)."\">\n";
            if ($widget == "miniplayer") {
                $argumentData = explode(" ", $arguments);
                if (is_string_empty($argumentData[0])) $argumentData[0] = "86";
                if (is_string_empty($argumentData[1])) $argumentData[1] = "#111111";
                if (is_string_empty($argumentData[2])) $argumentData[2] = "#b3b3b3";
                $output .= "<div id=\"rbcloud_mplayer".htmlspecialchars($wid)."\"></div>\n";
                $this->outputFooter .= "<script src=\"https://".htmlspecialchars($server)."/w/mplayer.js?u=https%3A%2F%2F".htmlspecialchars($server)."%3A".htmlspecialchars($port2)."%2F".htmlspecialchars($mount)."&amp;wid=".htmlspecialchars($wid)."&amp;pw=".htmlspecialchars($argumentData[0])."&amp;ca=".rawurlencode($argumentData[1])."&amp;cg=".rawurlencode($argumentData[2])."\"></script>\n";
            }
            if ($widget == "player") {
                $output .= "<div id=\"rbcloud_player".htmlspecialchars($wid)."\"></div>\n";
                $this->outputFooter .= "<script src=\"https://".htmlspecialchars($server)."/w/player.js?u=https%3A%2F%2F".htmlspecialchars($server)."%3A".htmlspecialchars($port2)."%2F".htmlspecialchars($mount)."&amp;wid=".htmlspecialchars($wid)."\"></script>\n";
            }
            if ($widget == "nowplaying") {
                $output .= "<div id=\"rbcloud_nowplaying".htmlspecialchars($wid)."\"></div>\n";
                if ($listeners) $output .= "<div>".$this->yellow->language->getText("radiobossListeners").": <span id=\"rbcloud_listeners".htmlspecialchars($wid)."\">...</span></div>\n";
                if ($nexttrack) $output .= "<div>".$this->yellow->language->getText("radiobossNexttrack").": <span id=\"rbcloud_nexttrack".htmlspecialchars($wid)."\">...</span></div>\n";
                $this->outputFooter .= "<script src=\"https://".htmlspecialchars($server)."/w/nowplaying.js?u=".htmlspecialchars($id)."&amp;wid=".htmlspecialchars($wid).(is_string_empty($listeners) ? "&amp;nl=1" : "")."\"></script>\n";
            }
            if ($widget == "cover") {
                $output .= "<img id=\"rbcloud_cover".htmlspecialchars($wid)."\" src=\"https://".htmlspecialchars($server)."/w/artwork/".htmlspecialchars($id).".png\" width=\"150\" height=\"150\" alt=\"Cover Art\">\n";
                $this->outputFooter .= "<script src=\"https://".htmlspecialchars($server)."/w/cover.js?u=".htmlspecialchars($id)."&amp;wid=".htmlspecialchars($wid)."\"></script>\n";
            }
            if ($widget == "recent") {
                if (is_string_empty($arguments)) $arguments = $this->yellow->system->get("radiobossTrackCount");
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

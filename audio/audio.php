<?php
// Audio extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/audio
// Copyright (c) 2013-2015 Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowAudio {
    const VERSION = "0.8.5";
    const TYPE = "feature";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("audioLocation", "/audio/");
        $this->yellow->system->setDefault("audioDownload", "0");
        $this->yellow->system->setDefault("audioUrlPrefix", "");
        $this->yellow->system->setDefault("audioStyle", "audio");
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = NULL;
        if ($name=="audio" && ($type=="block" || $type=="inline")) {
            list($url, $download, $style) = $this->yellow->toolbox->getTextArgs($text);
            $url = $this->yellow->system->get("audioUrlPrefix").$url;
            if (!preg_match("/^\w+:/", $url)) {
                $url = $this->yellow->system->get("coreServerBase").$url;
            } else {
                $url = $this->yellow->lookup->normaliseUrl("", "", "", $url);
            }
            if (strempty($download)) $download = $this->yellow->system->get("audioDownload");
            if (empty($style)) $style = $this->yellow->system->get("audioStyle");
            $output = "<div class=\"".htmlspecialchars($style)."\" role=\"region\" aria-label=\"".htmlspecialchars($style)."\">";
            $output .= "<audio src=\"".htmlspecialchars($url)."\" controls=\"controls\" preload=\"none\">HTML5 audio not supported.</audio>";
            if ($download) {
                $output .= "<p><a href=\"".htmlspecialchars($url)."\">Download</a></p>";
            }
            $output .="</div>";
        }
        if ($name=="audiostream" && ($type=="block" || $type=="inline")) {
            list($url, $autoplay, $style) = $this->yellow->toolbox->getTextArgs($text);
            $url = $this->yellow->lookup->normaliseUrl("", "", "", $url);
            if (empty($style)) $style = $this->yellow->system->get("audioStyle");
            $output = "<div class=\"".htmlspecialchars($style)."\">";
            $output .= "<audio src=\"".htmlspecialchars($url)."\" controls=\"controls\" preload=\"none\"";
            if ($autoplay) $output .= "autoplay=\"".htmlspecialchars($autoplay)."\"";
            $output .= ">HTML5 audio not supported.</audio>";
            $output .="</div>";
        }
        return $output;
    }
}

<?php
// Audio plugin, https://github.com/schulle4u/yellow-plugins-schulle4u/tree/master/audio
// Copyright (c) 2013-2015 Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowAudio {
    const VERSION = "0.7.1";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->config->setDefault("audioDownload", "0");
        $this->yellow->config->setDefault("audioUrlPrefix", "");
        $this->yellow->config->setDefault("audioStyle", "audio");
    }
    
    // Handle page content parsing of custom block
    public function onParseContentBlock($page, $name, $text, $shortcut) {
        $output = NULL;
        if ($name=="audio" && $shortcut) {
            list($url, $download, $style) = $this->yellow->toolbox->getTextArgs($text);
            $url = $this->yellow->config->get("audioUrlPrefix").$url;
            if (!preg_match("/^\w+:/", $url)) {
                $url = $this->yellow->config->get("serverBase").$url;
            } else {
                $url = $this->yellow->lookup->normaliseUrl("", "", "", $url);
            }
            if (strempty($download)) $download = $this->yellow->config->get("audioDownload");
            if (empty($style)) $style = $this->yellow->config->get("audioStyle");
            $output = "<div class=\"".htmlspecialchars($style)."\" role=\"region\" aria-label=\"".htmlspecialchars($style)."\">";
            $output .= "<audio src=\"".htmlspecialchars($url)."\" controls=\"controls\" preload=\"none\">HTML5 audio not supported.</audio>";
            if ($download) {
                $output .= "<p><a href=\"".htmlspecialchars($url)."\">Download</a></p>";
            }
            $output .="</div>";
        }
        if ($name=="audiostream" && $shortcut) {
            list($url, $style) = $this->yellow->toolbox->getTextArgs($text);
            $url = $this->yellow->lookup->normaliseUrl("", "", "", $url);
            if (empty($style)) $style = $this->yellow->config->get("audioStyle");
            $output = "<div class=\"".htmlspecialchars($style)."\">";
            $output .= "<audio src=\"".htmlspecialchars($url)."\" controls=\"controls\" preload=\"none\">HTML5 audio not supported.</audio>";
            $output .="</div>";
        }
        return $output;
    }
}

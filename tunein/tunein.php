<?php
// TuneIn plugin, https://github.com/schulle4u/yellow-plugins-schulle4u/tree/master/tunein
// Copyright (c) 2013-2018 Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowTunein {
    const VERSION = "0.7.3";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->config->setDefault("tuneinStyle", "tunein");
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="tunein" && ($type=="block" || $type=="inline")) {
            list($id, $style, $width, $height, $autoplay) = $this->yellow->toolbox->getTextArgs($text);
            if (empty($style)) $style = $this->yellow->config->get("tuneinStyle");
            if (empty($width)) $width = "100%";
            if (empty($height)) $height = "100px";
            if (empty($autoplay)) $autoplay = "false";
            $output = "<div class=\"".htmlspecialchars($style)."\">";
            $output .= "<iframe src=\"https://tunein.com/embed/player/".rawurlencode($id)."/?autoplay=".htmlspecialchars($autoplay)."\" style=\"width:".htmlspecialchars($width)."; height:".htmlspecialchars($height).";\" scrolling=\"no\" frameborder=\"no\"";
            $output .= "></iframe></div>";
        }
        return $output;
    }
}

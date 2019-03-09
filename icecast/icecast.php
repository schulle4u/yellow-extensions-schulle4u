<?php
// Icecast extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/icecast
// Copyright (c) 2019 Steffen Schultz
// This file may be used and distributed under the terms of the public license.

class YellowIcecast {
    const VERSION = "0.8.2";
    const TYPE = "feature";
    public $yellow;         //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("icecastServer", "");
        $this->yellow->system->setDefault("icecastPort", "");
        $this->yellow->system->setDefault("icecastMount", "");
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="icecast" && ($type=="inline")) {
            list($info, $server, $port, $mount) = $this->yellow->toolbox->getTextArgs($text);
            if(empty($info)) $info = "title";
            if(empty($server)) $server = $this->yellow->system->get("icecastServer");
            if(empty($port)) $port = $this->yellow->system->get("icecastPort");
            if(empty($mount)) $mount = $this->yellow->system->get("icecastMount");
            
            // Turn of caching
            $this->yellow->page->setHeader("Cache-Control", "no-store, no-cache, must-revalidate");
            
            // Curl setup
            $url = $server.":".$port."/status-json.xsl?mount=".$mount;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL,$url);
            $result = curl_exec($ch);
            curl_close($ch);

            // Format the JSON output
            $result = json_decode( $result, true );
            $stats = $result['icestats'];
            $source = $stats['source'];
            
            // We only output relevant stream metadata
            if($info == "bitrate") $output .= $source['bitrate'];
            if($info == "genre") $output .= $source['genre'];
            if($info == "peak") $output .= $source['listener_peak'];
            if($info == "listeners") $output .= $source['listeners'];
            if($info == "listenurl") $output .= $source['listenurl'];
            if($info == "description") $output .= $source['server_description'];
            if($info == "name") $output .= $source['server_name'];
            if($info == "type") $output .= $source['server_type'];
            if($info == "title") $output .= $source['title'];
            
        }
        return $output;
    }
}

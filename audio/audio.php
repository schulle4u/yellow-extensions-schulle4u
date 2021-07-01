<?php
// Audio extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/audio

class YellowAudio {
    const VERSION = "0.8.9";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("audioDownload", "0");
        $this->yellow->system->setDefault("audioUrlPrefix", "");
        $this->yellow->system->setDefault("audioStyle", "audio");
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="audio" && ($type=="block" || $type=="inline")) {
            list($url, $download, $style) = $this->yellow->toolbox->getTextArguments($text);
            if (!preg_match("/^\w+:/", $url)) {
                $url = $this->yellow->system->get("audioUrlPrefix").$url;
            }
            if (!preg_match("/^\w+:/", $url)) {
                $url = $this->yellow->lookup->normaliseUrl(
                    $this->yellow->system->get("coreServerScheme"),
                    $this->yellow->system->get("coreServerAddress"),
                    $this->yellow->system->get("coreServerBase"), $url);
            } else {
                $url = $this->yellow->lookup->normaliseUrl("", "", "", $url);
            }
            if (strempty($download)) $download = $this->yellow->system->get("audioDownload");
            if (empty($style)) $style = $this->yellow->system->get("audioStyle");
            $output = "<div class=\"".htmlspecialchars($style)."\" role=\"region\" aria-label=\"".htmlspecialchars(ucfirst($name))."\">";
            $output .= "<audio src=\"".htmlspecialchars($url)."\" controls=\"controls\" preload=\"none\">HTML5 audio not supported.</audio>";
            if ($download) $output .= "<p><a href=\"".htmlspecialchars($url)."\">Download</a></p>";
            $output .="</div>";
        }
        if ($name=="audiostream" && ($type=="block" || $type=="inline")) {
            $page->error(500, "The audiostream shortcut is now obsolete. Please use the audio shortcut to embed an audio stream!");
        }
        return $output;
    }
}

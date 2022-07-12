<?php
// Readtime extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/readtime

class YellowReadtime {
    const VERSION = "0.8.20";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("readtimeWordsPerMinute", "250");
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="readtime" && ($type=="inline")) {
            list($wordsPerMinute) = $this->yellow->toolbox->getTextArguments($text);
            if (empty($wordsPerMinute) || (!is_numeric($wordsPerMinute))) $wordsPerMinute = $this->yellow->system->get("readtimeWordsPerMinute");
            $content = strip_tags($page->getContent(true));
            $wordCount = $this->yellow->toolbox->getTextWords($content);
            $output .= "<span class=\"".htmlspecialchars($name)."\">".ceil($wordCount / $wordsPerMinute)."</span>";
        }
        return $output;
    }
}

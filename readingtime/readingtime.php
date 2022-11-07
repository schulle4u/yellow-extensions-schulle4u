<?php
// Readingtime extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/main/readingtime

class YellowReadingtime {
    const VERSION = "0.8.21";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("readingtimeWordsPerMinute", "250");
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="readingtime" && ($type=="inline")) {
            list($wordsPerMinute) = $this->yellow->toolbox->getTextArguments($text);
            if (is_string_empty($wordsPerMinute) || (!is_numeric($wordsPerMinute))) $wordsPerMinute = $this->yellow->system->get("readingtimeWordsPerMinute");
            $content = strip_tags($page->getContent(true));
            $wordCount = $this->yellow->toolbox->getTextWords($content);
            $output .= "<span class=\"".htmlspecialchars($name)."\">".ceil($wordCount / $wordsPerMinute)."</span>";
        }
        return $output;
    }
}

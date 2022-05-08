<?php
// Websearch extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/websearch

class YellowWebsearch {
    const VERSION = "0.8.18";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="websearch" && ($type=="block" || $type=="inline")) {
            list($site) = $this->yellow->toolbox->getTextArguments($text);
            if (empty($site)) $site = $this->yellow->page->address;
            $language = $page->get("language");
            $searchList = [
                "bing" => "https://www.bing.com/search?q=site%3A",
                "google" => "https://www.google.com/search?hl=".rawurlencode($language)."&q=site%3A",
                "duckduckgo" => "https://www.duckduckgo.com/?q=site%3A",
            ];
            $output = "<div class=\"".htmlspecialchars($name)."\" role=\"search\">\n";
            $output .= "<form id=\"websearch-form\">\n";
            $output .= "<select id=\"websearch-via\" name=\"websearch-via\" aria-label=\"".$this->yellow->language->getTextHtml("searchButton")." via\">\n";
            foreach ($searchList as $name => $url) {
                $output .= "<option value =\"".htmlspecialchars($url)."\">".ucfirst(htmlspecialchars($name))."</option>\n";
            }
            $output .= "</select>\n";
            $output .= "<input class=\"form-control\" id=\"query\" type=\"search\" name=\"q\" placeholder=\"".$this->yellow->language->getTextHtml("searchButton")."\" />\n";
            $output .= "<input id=\"websearch-site\" type=\"hidden\" name=\"site\" value=\"".htmlspecialchars($site)."\" />\n";
            $output .= "<button class=\"btn websearch-btn\" type=\"submit\">".$this->yellow->language->getTextHtml("searchButton")."</button>\n";
            $output .= "</form>\n";
            $output .= "</div>\n";
        }
        return $output;
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $extensionLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreExtensionLocation");
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$extensionLocation}websearch.js\"></script>\n";
        }
        return $output;
    }
}

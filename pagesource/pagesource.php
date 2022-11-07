<?php
// Pagesource extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/main/pagesource

class YellowPagesource {
    const VERSION = "0.8.8";
    public $yellow;         //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("pagesourceStyle", "pagesource");
    }
    
    // Handle page layout
    public function onParsePageLayout($page, $name) {
        if ($this->getPostRequest("status")=="source") {
            $this->yellow->page->setHeader("Last-Modified", $this->yellow->toolbox->getHttpDateFormatted(time()));
            $this->yellow->page->setHeader("Cache-Control", "no-cache, must-revalidate");
            $this->yellow->page->setHeader("Content-Type", "text/plain; charset=utf-8");
            $title = $this->yellow->page->get("title");
            $titleLenght = strlenu($title);
            $output = $title."\r\n";
            $output .= str_pad("=", $titleLenght, "=")."\r\n";
            $output .= $this->yellow->page->getContent(true)."\r\n";
            if ($this->yellow->page->isPage("footer")) {
                $output .= "---------------------------------------\r\n";
                $output .= $this->yellow->page->getPage("footer")->getContent(true);
            }
            $this->yellow->page->setOutput($output);
        }
    }

    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="pagesource" && ($type=="block" || $type=="inline")) {
            list($style) = $this->yellow->toolbox->getTextArguments($text);
            if (is_string_empty($style)) $style = $this->yellow->system->get("pagesourceStyle");
            $output = "<div class=\"".htmlspecialchars($style)."\">\n";
            $output .= "<form class=\"pagesource-form\" action=\"".$this->yellow->page->getLocation(true)."\" method=\"post\" target=\"_blank\">\n";
            $output .= "<input type=\"hidden\" name=\"status\" value=\"source\" />\n";
            $output .= "<input type=\"submit\" value=\"".$this->yellow->language->getTextHtml("EditToolbarPre")."\" class=\"btn source-btn\" />\n";
            $output .= "</form>\n";
            $output .= "</div>\n";
        }
        return $output;
    }
    
    // Return post request argument
    public function getPostRequest($key) {
        return isset($_POST[$key]) ? $_POST[$key] : "";
    }
}

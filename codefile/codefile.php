<?php
// Codefile extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/main/codefile

class YellowCodefile {
    const VERSION = "0.8.18";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="codefile" && ($type=="block" || $type=="inline")) {
            list($id, $filename) = $this->yellow->toolbox->getTextArguments($text);
            if (empty($id)) $id = "codefile";
            if (empty($filename)) $filename = $id."-download.txt";
            $output = "<div class=\"codefile\"><p><button class=\"btn source-btn\" id=\"codefile-btn\" data-codefile-id=\"".htmlspecialchars($id)."\" data-codefile-filename=\"".htmlspecialchars($filename)."\" value=\"Download\">".$this->yellow->language->getTextHtml("codefileButton")."</button></p></div>";
        }
        return $output;
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $extensionLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreExtensionLocation");
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$extensionLocation}codefile.js\"></script>\n";
        }
        return $output;
    }
}

<?php
// Codefile extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/main/codefile

class YellowCodefile {
    const VERSION = "0.8.22";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->language->setDefaults(array(
            "Language: en",
            "CodefileDescription: Download code blocks as text file.",
            "CodefileButton: Download source code",
            "Language: de",
            "CodefileDescription: Code-Blöcke als Textdatei herunterladen.",
            "CodefileButton: Quellcode herunterladen",
            "Language: sv",
            "CodefileDescription: Ladda ner kodblock som textfil.",
            "CodefileButton: Ladda ner källkod"));
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="codefile" && ($type=="block" || $type=="inline")) {
            list($id, $filename) = $this->yellow->toolbox->getTextArguments($text);
            if (is_string_empty($id)) $id = "codefile";
            if (is_string_empty($filename)) $filename = $id."-download.txt";
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

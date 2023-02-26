<?php
// Lightbox extension, http://github.com/schulle4u/yellow-extensions-schulle4u/tree/main/lightbox

class YellowLightbox {
    const VERSION = "0.8.21";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("lightboxNav", "auto");
        $this->yellow->system->setDefault("lightboxAutoplay", "false");
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="lightbox" && ($type=="block" || $type=="inline")) {
            list($src, $mode, $label, $group, $width, $height) = $this->yellow->toolbox->getTextArguments($text);
            if (is_string_empty($mode)) $mode = "image";
            if (is_string_empty($label)) $label = "Open";
            if (is_string_empty($width)) $width = "100%";
            if (is_string_empty($height)) $height = $width;
            $output = "<div class=\"".htmlspecialchars($name)."-init\">\n";
            switch($mode) {
                case "image": 
                    if (!preg_match("/^\w+:/", $src)) {
                        $imagePath = $this->yellow->lookup->findMediaDirectory("coreImageLocation").$src;
                    } else {
                        $imagePath = $this->yellow->lookup->normaliseUrl("", "", "", $src);
                    }
                    $output .= "<a href=\"".htmlspecialchars($imagePath)."\" class=\"lightbox\" data-group=\"".htmlspecialchars($group)."\">".htmlspecialchars($label)."</a>\n"; break;
                case "html": $output .= "<a href=\"#".htmlspecialchars($src)."\" data-type=\"html\" data-group=\"".htmlspecialchars($group)."\" class=\"lightbox\">".htmlspecialchars($label)."</a>\n"; break;
                case "iframe": $output .= "<a href=\"".htmlspecialchars($this->yellow->lookup->normaliseUrl("", "", "", $src))."\" data-type=\"iframe\" data-group=\"".htmlspecialchars($group)."\" data-width=\"".htmlspecialchars($width)."\" data-height=\"".htmlspecialchars($height)."\" class=\"lightbox\">".htmlspecialchars($label)."</a>\n"; break;
                case "youtube": $output .= "<a href=\"#\" data-type=\"youtube\" data-id=\"".htmlspecialchars($src)."\" data-group=\"".htmlspecialchars($group)."\" data-width=\"".htmlspecialchars($width)."\" data-height=\"".htmlspecialchars($height)."\" class=\"lightbox\">".htmlspecialchars($label)."</a>"; break;
            }
            $output .= "</div>\n";
        }
        return $output;
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $extensionLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreExtensionLocation");
            $output = "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"{$extensionLocation}lightbox-tobii.min.css\" />\n";
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$extensionLocation}lightbox-tobii.min.js\"></script>\n";
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$extensionLocation}lightbox.js\"></script>\n";
        }
        if ($name=="footer") {
            $output = "<div id=\"lightboxConfig\"";
            $output .= " data-lightboxNav=\"".htmlspecialchars($this->yellow->system->get("lightboxNav"))."\"";
            $output .= " data-lightboxAutoplay=\"".htmlspecialchars($this->yellow->system->get("lightboxAutoplay"))."\"";
            $output .= " data-lightboxPreviousLabel=\"".$this->yellow->language->getTextHtml("corePaginationPrevious")."\"";
            $output .= " data-lightboxNextLabel=\"".$this->yellow->language->getTextHtml("corePaginationNext")."\"";
            $output .= " data-lightboxCloseLabel=\"".$this->yellow->language->getTextHtml("editCancelButton")."\"";
            $output .="></div>\n";
        }
        return $output;
    }
}

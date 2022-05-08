<?php
// Private extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/private

class YellowPrivate {
    const VERSION = "0.8.11";
    public $yellow;         //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }

    // Handle page meta data
    public function onParseMetaData($page) {
        if ($page->get("status")=="private") $page->visible = false;
    }
    
    // Handle page layout
    public function onParsePageLayout($page, $name) {
        if ($this->yellow->page->get("status")=="private" && $this->yellow->getRequestHandler()=="core") {
            if ($this->yellow->page->isExisting("password") && $this->yellow->page->get("password")==trim($page->getRequest("password"))) {
                $this->yellow->page->setHeader("Last-Modified", $this->yellow->toolbox->getHttpDateFormatted(time()));
                $this->yellow->page->setHeader("Cache-Control", "no-cache, must-revalidate");
            } else {
                $errorMessage = $this->yellow->language->getText("privatePageError")."<br/>\n";
                $errorMessage .= "<form class=\"private-form\" action=\"".$this->yellow->page->getLocation(true)."\" method=\"post\">\n";
                $errorMessage .= "<p class=\"private-password\"><label for=\"password\">".$this->yellow->language->getTextHtml("editLoginPassword")."</label><br /><input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" /></p>\n";
                $errorMessage .= "<input type=\"submit\" value=\"".$this->yellow->language->getTextHtml("EditLoginButton")."\" class=\"btn login-btn\" />\n";
                $errorMessage .= "</form>\n";
                $this->yellow->page->error("420", $errorMessage);
            }
        }
    }
}

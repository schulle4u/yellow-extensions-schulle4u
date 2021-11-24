<?php
// Private extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/private

class YellowPrivate {
    const VERSION = "0.8.9";
    public $yellow;         //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }

    // Handle page meta data
    public function onParseMeta($page) {
        if ($page->get("status")=="private") $page->visible = false;
    }
    
    // Handle page layout
    public function onParsePageLayout($page, $name) {
        if ($this->yellow->page->get("status")=="private" && $this->yellow->getRequestHandler()=="core") {
            if ($this->yellow->page->isExisting("password") && $this->yellow->page->get("password")==trim($page->getRequest("password"))) {
                $this->yellow->page->setHeader("Last-Modified", $this->yellow->toolbox->getHttpDateFormatted(time()));
                $this->yellow->page->setHeader("Cache-Control", "no-cache, must-revalidate");
            } else {
                $pageError = $this->yellow->language->getText("privatePageError")."<br/>\n";
                $pageError .= "<form class=\"private-form\" action=\"".$this->yellow->page->getLocation(true)."\" method=\"post\">\n";
                $pageError .= "<p class=\"private-password\"><label for=\"password\">".$this->yellow->language->getTextHtml("editLoginPassword")."</label><br /><input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" /></p>\n";
                $pageError .= "<input type=\"submit\" value=\"".$this->yellow->language->getTextHtml("EditLoginButton")."\" class=\"btn login-btn\" />\n";
                $pageError .= "</form>\n";
                $this->yellow->page->error("420", $pageError);
            }
        }
    }
}

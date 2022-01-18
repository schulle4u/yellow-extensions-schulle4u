<?php
// SimpleCSS extension, https://github.com/schulle4u/yellow-extension-basic

class YellowSimplecss {
    const VERSION = "0.8.15";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("theme" => "simplecss"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("theme")=="simplecss") {
            $theme = reset(array_diff($this->yellow->system->getValues("theme"), array("simplecss")));
            $this->yellow->system->save($fileName, array("theme" => $theme));
        }
    }

    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $extensionLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreExtensionLocation");
            $output = "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"{$extensionLocation}simplecss-custom.css\" />\n";
        }
        return $output;
    }
}

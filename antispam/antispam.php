<?php
// Antispam plugin, http://github.com/schulle4u/yellow-plugins-schulle4u/tree/master/antispam
// Copyright (c) 2013-2018 Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowAntispam {
    const VERSION = "0.7.6";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = NULL;
        if ($name=="email" && ($type=="block" || $type=="inline")) {
            list($address, $displaytext) = $this->yellow->toolbox->getTextArgs($text);
            if (empty($displaytext)) $displaytext = null;
            $output = $this->email($address, $displaytext);
        }
        return $output;
    }
    
    /** @author Roman Ozana <ozana@omdesign.cz> */
    /**
     * Obfuscate email addresses and protect them against SPAM bots.
     *
     * @see http://techblog.tilllate.com/2008/07/20/ten-methods-to-obfuscate-e-mail-addresses-compared/
     * @see https://perishablepress.com/best-method-for-email-obfuscation/
     *
     * @param string $email
     * @param string $text
     * @param string $format
     * @return string
     */
    public function email($email, $text = null, $format = "<a href=\"mailto:%s\" rel=\"nofollow\">%s</a>") {
        return $this->html(
            sprintf($format, htmlspecialchars($email, ENT_QUOTES), $text ? htmlspecialchars($text, ENT_QUOTES) : $email)
        ) .
        "<noscript><span style=\"unicode-bidi: bidi-override; direction: rtl;\">" . strrev($email) . "</span></noscript>";
    }
    
    /**
     * Protect HTML code with rot13 then transform code back with Javascript.
     *
     * @param string $html
     * @return string
     */
    public function html($html) {
        return "<script type=\"text/javascript\">/* <![CDATA[ */document.write(\"" .
        addslashes(
            str_rot13($html)
        ) . "\".replace(/[a-zA-Z]/g,function(c){return String.fromCharCode((c<=\"Z\"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);}));/* ]]> */</script>";
    }
}

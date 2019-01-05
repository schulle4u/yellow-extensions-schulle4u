Antispam plugin 0.7.6
=====================
Alternative email obfuscator for Datenstrom Yellow. Uses [antispam class by Roman Ozana (Sphido)](https://github.com/sphido/antispam), available under the terms of the BSD 3-Clause License.  
This plugin uses a combination of two techniques for email protection [ROT13](http://en.wikipedia.org/wiki/ROT13) and CSS rtl. Works with or without javascript, but requires a css-capable browser. 

## How to install plugin

1. Download and install [Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/schulle4u/yellow-plugins-schulle4u/raw/master/zip/antispam.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `antispam.zip` into your `system/plugins` folder.

To uninstall delete the [plugin files](update.ini).

## How to use the Antispam plugin

Create an `[email]` shortcut.
 
The following arguments are available, all but the first argument are optional:

`address` = email address to obfuscate, e.g. `example@yourdomain.com`  
`displaytext` = an optional text for the email link, otherwise address will be used. 

If your browser doesn't support javascript or you have blocked it, a pure css method is used to show the obfuscated email address. Text browsers or screen-reader text views therefore cannot correctly display the address. In terms of accessibility and usability you should consider another method to provide a proper email address. Please note that all common obfuscation method have their advantages and disadvantages. 

## Developer

Steffen Schultz

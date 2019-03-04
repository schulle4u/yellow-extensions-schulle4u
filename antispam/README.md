Antispam 0.8.3
==============
Alternative email address obfuscator. 

## How to install extension

1. Download and install [Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/antispam.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `antispam.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to use the Antispam extension

Create an `[email]` shortcut.
 
The following arguments are available, all but the first argument are optional:

`address` = email address to obfuscate, e.g. `example@yourdomain.com`  
`displaytext` = an optional text for the email link, otherwise address will be used. 

This extension provides a more effective alternative to the built-in email protection from Markdown. It uses a combination of two techniques for email protection [ROT13](http://en.wikipedia.org/wiki/ROT13) and CSS rtl. Works with or without javascript, but requires a css-capable browser. If your browser doesn't support javascript or you have blocked it, a pure css method is used to show the obfuscated email address. Text browsers or screen-reader text views therefore cannot correctly display the address. 

## Developer

Steffen Schultz

[Antispam class developed by Roman Ozana (Sphido)](https://github.com/sphido/antispam), available under the terms of the BSD 3-Clause License. 

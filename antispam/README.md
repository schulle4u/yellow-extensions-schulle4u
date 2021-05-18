<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

Antispam 0.8.6
==============
Alternative email address obfuscator. 

<p align="center"><img src="antispam-screenshot.png?raw=true" alt="Screenshot"></p>

## How to obfuscate email addresses

Create an `[email]` shortcut.
 
The following arguments are available, all but the first argument are optional:

`address` = email address to obfuscate, e.g. `example@yourdomain.com`  
`text` = an optional text for the email link, otherwise address will be used. 

This extension provides a more effective alternative to the built-in email protection from Markdown. It uses a combination of two techniques for email protection [ROT13](http://en.wikipedia.org/wiki/ROT13) and CSS rtl. Works with or without javascript, but requires a css-capable browser. If your browser doesn't support javascript or you have blocked it, a pure css method is used to show the obfuscated email address. Text browsers or screen-reader text views therefore cannot correctly display the address. 

## Examples

Obfuscate email addresses:

    [email example@example.com]
    [email example@example.com contact]
    [email example@example.com "Write an email"]


## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/antispam.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Steffen Schultz. [Get help](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

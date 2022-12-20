<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Antispam 0.8.7

Alternative email address obfuscator. 

<p align="center"><img src="antispam-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install an extension

[Download extension](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/main/downloads/antispam.zip) and copy ZIP file into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to obfuscate email addresses

Create an `[email]` shortcut.
 
The following arguments are available, all but the first argument are optional:

`address` = email address to obfuscate, e.g. `example@yourdomain.com`  
`text` = an optional text for the email link, otherwise address will be used. 

This extension provides a more effective alternative to the built-in email protection from Markdown. It uses a combination of two techniques for email protection [ROT13](http://en.wikipedia.org/wiki/ROT13) and CSS rtl. Works with or without javascript, but requires a css-capable browser. If your browser doesn't support javascript or you have blocked it, a pure css method is used to show the obfuscated email address. Text browsers or screen-reader text views therefore cannot correctly display the address. 

## Examples

General usage:

    [email example@example.com]

Custom link text, use quotes for multiple words: 

    [email example@example.com contact]
    [email example@example.com "Write an email"]

## Acknowledgements

Thanks to the Datenstrom Yellow community for help and feedback!

## Developer

Steffen Schultz. [Get help](https://datenstrom.se/yellow/help/).

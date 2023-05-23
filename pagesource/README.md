<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Pagesource 0.8.9

Display Markdown source on pages.

<p align="center"><img src="pagesource-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install an extension

[Download ZIP file](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/main/downloads/pagesource.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to display Markdown source

Create a `[pagesource]` shortcut. 

The following arguments are available, all arguments are optional:

`Style` = button style, e.g. `left`, `center`, `right`  

This extension adds a button to each page you would like to allow viewing the page source. The page will be rendered in raw markdown format, excluding page settings. Therefore other extension shortcuts within a page will not be parsed. You can use this extension to provide website visitors a simplified printing view, a content export for plaintext environments, or just to show how easy it is to write beautiful web pages in markdown. 

## Examples

Embedding a button:

    [pagesource]

Embedding a button, different style:

    [pagesource right]

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`PagesourceStyle` = default button style

## Acknowledgements

Thanks to the Datenstrom Yellow community for help and feedback!

## Developer

Steffen Schultz. [Get help](https://datenstrom.se/yellow/help/).

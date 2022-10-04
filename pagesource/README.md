<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Pagesource 0.8.7

Display Markdown source on pages.

<p align="center"><img src="pagesource-screenshot.png?raw=true" alt="Screenshot"></p>

## How to display Markdown source

Create a `[pagesource]` shortcut. 

The following arguments are available, all arguments are optional:

`Style` = pagesource style, e.g. left, center, right

This extension adds a "Source code" button to each page you would like to allow viewing the page source. The page will be rendered in raw markdown format, excluding page settings. Therefore other extension shortcuts within a page will not be parsed. You can use this extension to provide website visitors a simplified printing view, a content export for plaintext environments, or just to show how easy it is to write beautiful web pages in markdown. 

## Examples

Embedding a "Source code" button:

    [pagesource]

Embedding a "Source code" button, different style:

    [pagesource right]

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`PagesourceStyle` = default pagesource style

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/pagesource.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Steffen Schultz. [Get help](https://datenstrom.se/yellow/help/).

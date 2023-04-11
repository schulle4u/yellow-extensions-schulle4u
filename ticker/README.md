<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Ticker 0.8.12

RSS feed parser.

<p align="center"><img src="ticker-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install an extension

[Download ZIP file](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/main/downloads/ticker.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to display RSS feeds

Create a `[ticker]` shortcut.

The following arguments are available, all but the first argument are optional:

`RssUrl` = RSS feed URL  
`ShortcutEntries` = number of entries to show  
`Style` = CSS class to use  

This extension reads all commonly used RSS and Atom feeds. Feed caching for better website performance is supported. 

## Examples

Showing the latest items from a RSS feed:

    [ticker http://example.com/feed.xml]
    [ticker http://example.com/feed.xml 5]
    [ticker http://example.com/feed.xml 10]

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`: 

`TickerShowDate` = Wether to display the date for feed entries, 1 or 0  
`TickerShowDescription` = Wether to show item descriptions, 1 or 0  

## Acknowledgements

This extension includes [SimplePie 1.6](http://simplepie.org/) by Ryan Parman, Geoffrey Sneddon, Ryan McCue and contributors. Thanks for your work!

## Developer

Steffen Schultz. [Get help](https://datenstrom.se/yellow/help/).

<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Ticker 0.8.10

RSS feed parser.

<p align="center"><img src="ticker-screenshot.png?raw=true" alt="Screenshot"></p>

## How to display RSS feeds

Create a `[ticker]` shortcut.

The following arguments are available, all but the first argument are optional:

`RssUrl` = RSS feed URL  
`NumEntries` = number of entries to display  
`Style` = CSS class to use  

This extension reads all commonly used RSS and Atom feeds. Feed caching for better website performance is supported. 

## Examples

Showing the latest items from a RSS feed:

    [ticker http://example.com/feed.xml]
    [ticker http://example.com/feed.xml 5]
    [ticker http://example.com/feed.xml 10]

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`: 

`TickerShowDate` = Wether to display the date for feed entries, 1 or 0 (on by default).  
`TickerShowDescription` = Wether to show item descriptions, 1 or 0 (on by default).  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/ticker.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

[SimplePie parser 1.5](http://simplepie.org/) by Ryan Parman, Geoffrey Sneddon, Ryan McCue and contributors. It's licensed under [BSD license](http://www.opensource.org/licenses/BSD-3-Clause). 

## Developer

Steffen Schultz. [Get help](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

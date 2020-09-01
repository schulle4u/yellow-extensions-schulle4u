Ticker 0.8.7
============
RSS feed parser.

## How to display RSS feeds

Create a `[ticker]` shortcut.
 
The following arguments are available, all but the first argument are optional:

`RssUrl` = RSS feed URL  
`NumEntries` = number of entries to display  
`Style` = CSS class to use  

By default this extension supports standard RSS feeds only. If you want to parse RSS or Atom feeds, change `TickerAdvancedParser: 1` in your `system/settings/system.ini` to use the advanced SimplePie feed parser. SimplePie will give you caching capabilities as well. When there are problems, please check permissions of your `/cache` folder. 

## Examples

Showing the latest items from a RSS feed:

    [ticker http://example.com/feed.xml]
    [ticker http://example.com/feed.xml 5]
    [ticker http://example.com/feed.xml 10]

## Settings

The following settings can be configured in file `system/settings/system.ini`: 

`TickerShowDate` = Wether to display the date for feed entries, 1 or 0 (on by default).  
`TickerShowDescription` = Wether to show item descriptions, 1 or 0 (on by default).  
`TickerAdvancedParser` = Use SimplePie instead of `simplexml_load_file`, 1 or 0 (off by default, see below).  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/ticker.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

[SimplePie parser 1.5](http://simplepie.org/) by Ryan Parman, Geoffrey Sneddon, Ryan McCue and contributors. It's licensed under [BSD license](http://www.opensource.org/licenses/BSD-3-Clause). 

## Developer

Steffen Schultz. [Get help](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

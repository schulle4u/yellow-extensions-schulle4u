Ticker plugin 0.7.2
===================
Ticker is a RSS parser plugin for Datenstrom Yellow.

## How to install plugin

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/schulle4u/yellow-plugins-schulle4u/raw/master/zip/ticker.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `ticker.zip` into your `system/plugins` folder.

To uninstall delete the [plugin files](update.ini).

## How to use the ticker

Create a `[ticker]` shortcut.
 
The following arguments are available, all but the first argument are optional:

`RSSURL` = RSS feed URL  
`NUMENTRIES` = number of entries to display  
`STYLE` = CSS class to use  

## How to configure the ticker

The following settings can be configured in file `system/config/config.ini`: 

`TickerShowDate` = Wether to display the date for feed entries, 1 or 0 (on by default).  
`TickerShowDescription` = Wether to show item descriptions, 1 or 0 (on by default).  
`TickerAdvancedParser` = Use SimplePie instead of `simplexml_load_file`, 1 or 0 (off by default, see below).  

By default this plugin supports standard RSS feeds only. If you want to parse RSS or Atom feeds, change `TickerAdvancedParser: 1` in your `system/config/config.ini`. This will use the [SimplePie parser 1.5](http://simplepie.org/) by Ryan Parman, Geoffrey Sneddon, Ryan McCue and contributors. It's licensed under [BSD license](http://www.opensource.org/licenses/BSD-3-Clause). SimplePie will give you caching capabilities as well. When there are problems, please check permissions of your `/system/plugins/cache` folder. 

Inspired by code from [Webdesign Weisshart](https://webdesign.weisshart.de/rss2html.php)

## Example

Showing the latest items from a RSS feed:

    [ticker http://example.com/feed.xml]
    [ticker http://example.com/feed.xml 5]
    [ticker http://example.com/feed.xml 10]

## Developer

Steffen Schultz

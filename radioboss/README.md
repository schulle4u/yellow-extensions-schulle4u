Radioboss plugin 0.7.2
======================
Shortcut plugin to integrate the widgets for [RadioBoss Cloud](https://www.radioboss.fm/radioboss-cloud/), a cloud-based radio automation service developed by [DJSoft.net](https://www.djsoft.net). 

## How to install plugin

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/schulle4u/yellow-plugin-radioboss/archive/master.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `master.zip` into your `system/plugins` folder.

To uninstall delete the [plugin files](update.ini).

## How to use the RadioBoss plugin

Create a `[radioboss]` shortcut. 

The following arguments are available, all but the first argument are optional: 

`type` = type of widget (see below for a list of available widgets).  
`style` = CSS class to use, e.g. left, center, right.  
`server` = The hostname of used cloud instance without leading `https://` (example: `c2.radioboss.fm`).  
`port` = Streaming port (example: `8010`).  
`port2` = Second streaming port, used for secure connections. If not specified, first port with a leading 1 will be used, (example: `18010`).  
`id` = Currently this are the last two digits of your port number (example: `10`).  
`mount` = The mountpoint of your stream without leading slash (example: `stream`). 

The following widgets are available: 

`player` = A web player for your stream.  
`nowplaying` = Show currently playing track.  
`cover` = Display album cover for current track.  
`recent` = Show the last 10 recently played tracks.  
`links` = Show a list of streaming links.  
`page` = Displays a link to the auto-generated stream page of RadioBoss Cloud. 

*Note*: RadioBoss Cloud is still under development, therefore things may change also in this plugin. Some of the widgets are not compatible with all browsers, and most likely never will be. Especially IE is known to have issues with the involved JS. Currently some widgets may not work if used twice for different streams on the same page. 

## How to configure the RadioBoss plugin

The following settings must be configured in file `system/config/config.ini`: 

`RadiobossServer` = The hostname of used cloud instance without leading `https://` (example: `c2.radioboss.fm`).  
`RadiobossPort` = Streaming port (example: `8010`).  
`RadiobossPort2` = Second streaming port, used for secure connections. If not specified, first port with a leading 1 will be used, (example: `18010`).  
`RadiobossId` = Currently this are the last two digits of your port number (example: `10`).  
`RadiobossMount` = The mountpoint of your stream without leading slash (example: `stream`).  

To obtain your server configuration, log into your RadioBoss cloud account and click on the information tab. 

Optional Configuration:  
`RadiobossListeners` = Show listener count in nowplaying widget (default: `0`).  
`RadioBossStyle` = Default CSS class to use, e.g. left, center, right. 

## Example

Here is an example page with all available widgets. 

```
---
Title: What's happening?
Author: Steffen
---
## Listen live!

[radioboss player]

## Current track

[radioboss nowplaying]

[radioboss cover]

## Recently played

[radioboss recent]

## How to listen

[radioboss links]

## RadioBoss stream page

[radioboss page]

## An additional widget for second stream

[radioboss nowplaying - c2.radioboss.fm 8017 18017 17 stream]
```

## Developer

Steffen Schultz

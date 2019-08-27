Radioboss 0.8.5
===============
Widgets for RadioBoss Cloud.

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/radioboss.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `radioboss.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to embed RadioBoss widgets

Create a `[radioboss]` shortcut. 

The following arguments are available, all but the first argument are optional: 

`widget` = type of widget (see below for a list of available widgets).  
`arguments` = A space-separated list of optional widget arguments if available.   
`style` = CSS class to use, e.g. left, center, right.  
`server` = The hostname of used cloud instance without leading `https://` (example: `c2.radioboss.fm`).  
`port` = Streaming port (example: `8010`).  
`port2` = Second streaming port, used for secure connections. If not specified, first port with a leading 1 will be used, (example: `18010`).  
`id` = Currently this are the last two digits of your port number (example: `10`).  
`mount` = The mountpoint of your stream without leading slash (example: `stream`). 

The following widgets are available: 

`miniplayer` = A configurable mini web player for your stream. Configuration options can be applied using the `arguments` parameter, see example below.  
`player` = A web player for your stream.  
`nowplaying` = Show currently playing track.  
`cover` = Display album cover for current track.  
`recent` = Show the last 10 recently played tracks.  
`links` = Show a list of streaming links.  
`page` = Displays a link to the auto-generated stream page of RadioBoss Cloud. 

The extension uses [RadioBoss Cloud](https://www.radioboss.fm/radioboss-cloud/), a cloud-based radio automation service developed by [DJSoft.net](https://www.djsoft.net). 

*Note*: RadioBoss Cloud is still under development, therefore things may change also in this extension. Some of the widgets are not compatible with all browsers, and most likely never will be. Especially IE is known to have issues with the involved JS.  

## Settings

The following settings can be configured in file `system/settings/system.ini`: 

`RadiobossServer` = The hostname of used cloud instance without leading `https://` (example: `c2.radioboss.fm`).  
`RadiobossPort` = Streaming port (example: `8010`).  
`RadiobossPort2` = Second streaming port, used for secure connections. If not specified, first port with a leading 1 will be used, (example: `18010`).  
`RadiobossId` = Currently this are the last two digits of your port number (example: `10`).  
`RadiobossMount` = The mountpoint of your stream without leading slash (example: `stream`).  
`RadiobossListeners` = Show listener count in nowplaying widget (default: `0`).  
`RadioBossStyle` = Default CSS class to use, e.g. left, center, right. 

To obtain your server configuration, log into your RadioBoss cloud account and click on the information tab. 

## Example

Here is an example page with all available widgets. 

```
---
Title: What's happening?
Author: Steffen
---
## Listen live!

Miniplayer with standard configuration:   
[radioboss miniplayer]

Miniplayer with custom configuration (width in pixels, colors for active and greyed buttons):   
[radioboss miniplayer "86 #111111 #b3b3b3"]

Normal web player:  
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

[radioboss nowplaying - - c2.radioboss.fm 8017 18017 17 stream]
```

## Developer

Steffen Schultz featuring DJSoft.net

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

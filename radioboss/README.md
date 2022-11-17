<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Radioboss 0.8.13

Widgets for RadioBoss Cloud.

<p align="center"><img src="radioboss-screenshot.png?raw=true" alt="Screenshot"></p>

## How to embed RadioBoss widgets

Create a `[radioboss]` shortcut. 

The following arguments are available, all but the first argument are optional: 

`Widget` = type of widget.  
`Arguments` = A space-separated list of optional widget arguments if applicable.   
`Style` = RadioBoss style, e.g. `left`, `center`, `right`.  
`Server` = the RadioBoss server instance, e.g. `c2.radioboss.fm`.  
`Port` = Streaming port, e.g. `8010`.  
`Port2` = Port for secure connectsions, e.g. `18010`.  
`Id` = the last two or three digits of your port number, e.g. `10`.  
`Mount` = the stream mount point without leading slash, e.g. `stream`. 

The following widgets are available: 

`Miniplayer` = a mini web player for your stream, supports optional arguments.  
`Player` = a web player for your stream.  
`Nowplaying` = currently playing track.  
`Cover` = album cover for current track.  
`Recent` = recently played tracks, supports optional arguments.  
`Links` = a list of streaming links.  
`Page` = a link to the auto-generated stream page. 

## Examples

Miniplayer with standard configuration:

    [radioboss miniplayer]

Miniplayer with additional arguments (width in pixels, colors for active and greyed buttons):

    [radioboss miniplayer "86 #111111 #b3b3b3"]

Normal web player:

    [radioboss player]

Show the last 20 tracks:

    [radioboss recent 20]

Web player, different stream:

    [radioboss player - - c2.radioboss.fm 8017 18017 17 stream]

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`: 

`RadiobossServer` = the RadioBoss server instance, e.g. `c2.radioboss.fm`.  
`RadiobossPort` = Streaming port, e.g. `8010`.  
`RadiobossPort2` = Port for secure connectsions, e.g. `18010`.  
`RadiobossId` = the last two or three digits of your port number, e.g. `10`.  
`RadiobossMount` = the stream mount point without leading slash, e.g. `stream`. 
`RadiobossListeners` = show listener count in nowplaying widget.  
`RadiobossNexttrack` = show upcoming track in nowplaying widget.  
`RadiobossTrackCount` = number of recently played songs, maximum 20.  
`RadiobossStyle` = RadioBoss style, e.g. `left`, `center`, `right`.  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/radioboss.zip) and copy ZIP file into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

This extension uses [RadioBoss Cloud](https://www.radioboss.fm/radioboss-cloud/) by DJSoft. The service provider collects personal data and uses cookies.

## Developer

Steffen Schultz. [Get help](https://datenstrom.se/yellow/help/).

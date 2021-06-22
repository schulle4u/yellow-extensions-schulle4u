<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

Soundcloud 0.8.4
================
Embed Soundcloud audio tracks.

<p align="center"><img src="soundcloud-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to embed an audio track

Create a `[soundcloud]` shortcut.
 
The following arguments are available, all but the first argument are optional:

`Id` = last part of a [Soundcloud](https://soundcloud.com) link, e.g. `http://api.soundcloud.com/tracks/101175715`  
`Style` = audio track style, e.g. `left`, `center`, `right`  
`Width` = audio track width, pixel or percent  
`Height` = audio track height, pixel or percent   

## Examples

Embedding an audio track:

    [soundcloud 101175715]
    [soundcloud 101175715 left 200 166]
    [soundcloud 101175715 right 200 166]

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`SoundcloudStyle` = audio track style, e.g. `left`, `center`, `right`  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/soundcloud.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

This extension uses [Soundcloud](https://soundcloud.com). The service provider collects personal data and uses cookies.

## Developer

Steffen Schultz. [Get help](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Audio 0.8.10

HTML5 audio player.

<p align="center"><img src="SCREENSHOT.png" alt="Screenshot"></p>

## How to install an extension

[Download ZIP file](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/main/downloads/audio.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to use the player

Create an `[audio]` shortcut.
 
The following arguments are available, all but the first argument are optional:

`Url` = URL of audio file, e.g. OGG or MP3  
`Download` = show download link for audio file, 1 or 0  
`Style` = CSS class of player 

This extension embeds a basic audio player using the HTML `<audio>` element, which is supported by most web browsers. 

## Examples

Embedding an audio track:

    [audio /media/downloads/demo.mp3]

Embedding an audio track, different style:

    [audio /media/downloads/episode-47.mp3 - right]

Embedding a track from an external URL and allow downloading:

    [audio http://wolke.robbenradio.de/podcasts/rt033_yellow.mp3 1]

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`: 

`AudioDownload` = show download link for audio files, 1 or 0  
`AudioUrlPrefix` = URL prefix for audio files on a CDN  
`AudioStyle` = CSS class to use for the player  

## Acknowledgements

Thanks to the Datenstrom Yellow community for help and feedback!

## Developer

Steffen Schultz. [Get help](https://datenstrom.se/yellow/help/).

Audio 0.8.7
===========
HTML5 audio player.

<p align="center"><img src="audio-screenshot.png?raw=true" alt="Screenshot"></p>

## How to use the player

Create an `[audio]` shortcut.
 
The following arguments are available, all but the first argument are optional:

`url` = URL for audio file, e.g. OGG or MP3  
`download` = show download link for audio file, 1 or 0  
`style` = CSS class to use for the player 

This extension embeds a basic audio player using the HTML5 `<audio>` tag, which is supported by most web browsers. 

## Examples

Embedding an audio track:

    [audio /media/downloads/demo.mp3]
    [audio /media/downloads/episode-47.mp3 - player2]
    [audio http://wolke.robbenradio.de/podcasts/rt033_yellow.mp3 1]

You can also embed audio streams. Although the `[audio]` shortcut is able to play them, a simple `[audiostream]` shortcut is provided to avoid rare configuration problems (e.g. if `audioUrlPrefix` is used): 

    [audiostream http://stream.powerradio4u.de:8000/p4u.mp3]

Here is a page using a standalone audio player:

```
---
Title: Audio
TitleSlug: audio
Layout: audio
---
[audiostream http://stream.powerradio4u.de:8000/p4u.mp3 autoplay]
```

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`: 

`AudioDownload` = show download link for audio files, 1 or 0  
`AudioUrlPrefix` = URL prefix for audio files  
`AudioStyle` = CSS class to use for the player  

The following file can be configured:

`system/layouts/audio.html` = layout file for standalone audio player  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/audio.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Steffen Schultz. [Get help](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

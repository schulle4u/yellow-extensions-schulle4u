Audio 0.8.3
===========
HTML5 audio player.

<p align="center"><img src="audio-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/audio.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `audio.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](update.ini).

## How to use the player

Create an `[audio]` shortcut.
 
The following arguments are available, all but the first argument are optional:

`url` = URL for audio file, e.g. OGG or MP3  
`download` = show download link for audio file, 1 or 0  
`style` = CSS class to use for the player 

This extension embeds a basic audio player using the HTML5 `<audio>` tag, which is supported by most web browsers. 

## Settings

The following settings can be configured in file `system/settings/system.ini`: 

`AudioDownload` = show download link for audio files, 1 or 0  
`AudioUrlPrefix` = URL prefix for audio files  
`AudioStyle` = CSS class to use for the player  

## Example

Embedding an audio track:

    [audio /media/downloads/demo.mp3]
    [audio /media/downloads/episode-47.mp3 - player2]
    [audio http://wolke.robbenradio.de/podcasts/rt033_yellow.mp3 1]

You can also embed audio streams. Although the `[audio]` shortcut is able to play them, a simple `[audiostream]` shortcut is provided to avoid rare configuration problems (e.g. if `audioUrlPrefix` is used): 

    [audiostream http://stream.powerradio4u.de:8000/p4u.mp3]

## Developer

Steffen Schultz

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

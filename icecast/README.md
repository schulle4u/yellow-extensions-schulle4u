Icecast 0.8.3
=============
Icecast statistics.

## How to display Icecast statistics

Create an `[icecast]` shortcut. 

The following arguments are available, all arguments are optional:

`Info` = information type, e. g. title, listeners, peak, bitrate, genre.  
`Server` = Hostname or IP of your server.  
`Port` = Port of the Icecast instance.  
`Mount` = Mountpoint for the listener stream. 

This extension provides a basic statistic module for Icecast. It uses the information from `status-json.xsl`, therefore Icecast => version 2.4.0 is required. Since this plugin doesn't use Javascript, no realtime statistics are possible. 

## Examples

Display the currently playing song:

    Current song: [icecast]

Display listener count:

    Listeners: [icecast listeners]  
    Listener peak: [icecast peak]

Use a different server: 

    Current song: [icecast title stream.example.com 8000 /stream.mp3]

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`IcecastServer` = Hostname or IP of your server.  
`IcecastPort` = Port of the Icecast instance.  
`IcecastMount` = Mountpoint for the listener stream. 

## Installation

[Download extension](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/icecast.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Steffen Schultz. [Get help](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

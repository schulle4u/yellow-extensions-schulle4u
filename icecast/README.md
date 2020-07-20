Icecast 0.8.2
=============
Icecast statistics.

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/icecast.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `icecast.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to display Icecast statistics

Create an `[icecast]` shortcut. 

The following arguments are available, all arguments are optional:

`Info` = information type, e. g. title, listeners, peak, bitrate, genre.  
`Server` = Hostname or IP of your server.  
`Port` = Port of the Icecast instance.  
`Mount` = Mountpoint for the listener stream. 

This extension provides a basic statistic module for Icecast. It uses the information from `status-json.xsl`, therefore Icecast => version 2.4.0 is required. Since this plugin doesn't use Javascript, no realtime statistics are possible. 

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`IcecastServer` = Hostname or IP of your server.  
`IcecastPort` = Port of the Icecast instance.  
`IcecastMount` = Mountpoint for the listener stream. 

## Example

Display the currently playing song:

    Current song: [icecast]

Display listener count:

    Listeners: [icecast listeners]  
    Listener peak: [icecast peak]

Use a different server: 

    Current song: [icecast title stream.example.com 8000 /stream.mp3]


## Developer

Steffen Schultz. [Get support](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

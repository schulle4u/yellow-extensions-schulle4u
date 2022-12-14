<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Twitter 0.8.7

Twitter-Nachrichten einbinden.

<p align="center"><img src="twitter-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung installiert

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/twitter.zip) und die ZIP-Datei in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Wie man eine Nachricht einbindet

Erstelle eine `[twitter]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, alle bis auf das erste Argument sind optional:
 
`Id` = der letzte Teil eines [Twitter](https://www.twitter.com)-Links, z. B. `https://twitter.com/dog_feelings/status/1169078881963261953`  
`Theme` = Nachrichten-Theme, z. B. `light`, `dark`  
`Style` = Nachrichtenstil, z. B. `left`, `center`, `right`  
`Width` = Nachrichtenbreite, Pixel oder Prozent  
`Height` = Nachrichtenhöhe, Pixel oder Prozent  

Du solltest wissen, dass der Dienstanbieter personenbezogene Daten sammelt und Cookies benutzt.

## Beispiele

Tweet einbinden:

    [twitter 1169078881963261953]

Tweet einbinden (Theme und Stil anpassen):

    [twitter 1169078881963261953 dark]
    [twitter 1169078881963261953 light right]

Zeitleiste einbinden:

    [twitter dog_feelings]

Zeitleiste einbinden (Theme und Abmessungen anpassen):

    [twitter dog_feelings/likes]
    [twitter dog_feelings/likes light - 250 250]

Folgen-Schaltfläche einbinden:

    [twitterfollow dog_feelings]

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`TwitterTheme` = Nachrichten-Theme, z. B. `light`, `dark`  

## Danksagung

Vielen Dank an Datenstrom für die zwischenzeitliche Entwicklung und Wartung dieser Erweiterung!

Diese Erweiterung verwendet [Twitter](https://www.twitter.com). Vielen Dank für den kostenlosen Dienst.

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

Twitter 0.8.6
=============
Twitter-Nachrichten einbinden.

<p align="center"><img src="twitter-screenshot.png?raw=true" width="795" height="836" alt="Bildschirmfoto"></p>

## Wie man eine Nachricht einbindet

Erstelle eine `[twitter]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, alle bis auf das erste Argument sind optional:
 
`Id` = der letzte Teil eines [Twitter](https://www.twitter.com)-Links, z.B. `https://twitter.com/dog_feelings/status/1169078881963261953`  
`Theme` = Nachrichtenthema, z.B. `light`, `dark`  
`Style` = Nachrichtenstil, z.B. `left`, `center`, `right`  
`Width` = Nachrichtenbreite, Pixel oder Prozent  
`Height` = Nachrichtenhöhe, Pixel oder Prozent  

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

`TwitterTheme` = Nachrichtenthema, z.B. `light`, `dark`  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/twitter.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

Diese Erweiterung verwendet [Twitter](https://www.twitter.com). Der Dienstanbieter sammelt personenbezogene Daten und benutzt Cookies.

## Entwickler

Steffen Schultz. [Hilfe finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Soundcloud 0.8.4

Soundcloud-Audio einbinden.

<p align="center"><img src="soundcloud-screenshot.png?raw=true" width="795" height="836" alt="Bildschirmfoto"></p>

## Wie binde ich eine Audiospur ein?

Erstelle eine `[soundcloud]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, alle bis auf das erste Argument sind optional:

`Id` = der letzte Teil eines [Soundcloud](https://soundcloud.com)-Links, z.B. `http://api.soundcloud.com/tracks/101175715`  
`Style` = Audiospurstil, z.B. `left`, `center`, `right`  
`Width` = Audiospurbreite, Pixel oder Prozent  
`Height` = Audiospurhöhe, Pixel oder Prozent   

## Beispiele

Audiospur einbinden:

    [soundcloud 101175715]

Audiospur einbinden, Stil und Abmessungen anpassen:

    [soundcloud 101175715 left 200 166]
    [soundcloud 101175715 right 200 166]

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`SoundcloudStyle` = Audiospurstil, z.B. `left`, `center`, `right`  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/soundcloud.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

Diese Erweiterung verwendet [Soundcloud](https://soundcloud.com). Der Dienstanbieter sammelt personenbezogene Daten und benutzt Cookies.

## Entwickler

Steffen Schultz. [Hilfe finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

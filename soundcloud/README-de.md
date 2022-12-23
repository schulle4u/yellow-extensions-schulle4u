<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Soundcloud 0.8.5

Soundcloud-Audio einbinden.

<p align="center"><img src="soundcloud-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung installiert

[ZIP-Datei herunterladen](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/soundcloud.zip) und in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Wie binde ich eine Audiospur ein?

Erstelle eine `[soundcloud]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, alle bis auf das erste Argument sind optional:

`Id` = der letzte Teil eines [Soundcloud](https://soundcloud.com)-Links, z.B. `http://api.soundcloud.com/tracks/101175715`  
`Style` = Audiospurstil, z. B. `left`, `center`, `right`  
`Width` = Audiospurbreite, Pixel oder Prozent  
`Height` = Audiospurhöhe, Pixel oder Prozent   

Du solltest wissen, dass der Dienstanbieter personenbezogene Daten sammelt und Cookies benutzt.

## Beispiele

Audiospur einbinden:

    [soundcloud 101175715]

Audiospur einbinden, Stil und Abmessungen anpassen:

    [soundcloud 101175715 left 200 166]
    [soundcloud 101175715 right 200 166]

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`SoundcloudStyle` = Audiospurstil, z. B. `left`, `center`, `right`  

## Danksagung

Vielen Dank an Datenstrom für die anfängliche Entwicklung!

Diese Erweiterung verwendet [Soundcloud](https://soundcloud.com). Vielen Dank für den Dienst.

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

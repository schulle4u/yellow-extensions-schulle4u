<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Audio 0.8.10

HTML5-Audio-Player.

<p align="center"><img src="audio-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung installiert

[ZIP-Datei herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/main/downloads/audio.zip) und in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Wie man den Player verwendet

Erstelle eine `[audio]`-Abkürzung.
 
Die folgenden Argumente sind verfügbar, mit Ausnahme des ersten Arguments sind alle Angaben optional:

`Url` = URL zur Audiodatei, z. B. OGG oder MP3  
`Download` = Zeige einen Download-Link für die Audiodatei, 1 oder 0  
`Style` = CSS-Klasse für den Player 

Diese Erweiterung stellt einen einfachen Audio-Player zur Verfügung, welcher das HTML5-Element `<audio>` verwendet. Es sollte von allen modernen Webbrowsern unterstützt werden. 

## Beispiele

Eine Audiodatei einbetten:

    [audio /media/downloads/demo.mp3]

Eine Audiodatei einbetten, Stil anpassen:

    [audio /media/downloads/episode-47.mp3 - right]

Audiodatei von einer externen URL abrufen und Downloads erlauben: 

    [audio http://wolke.robbenradio.de/podcasts/rt033_yellow.mp3 1]

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`AudioDownload` = Zeige einen Download-Link für Audiodateien, 1 oder 0  
`AudioUrlPrefix` = URL-Präfix für Audiodateien auf einem CDN  
`AudioStyle` = CSS-Klasse für den Player  

## Danksagung

Vielen Dank an die Datenstrom-Yellow-Gemeinschaft für Hilfe und Feedback!

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

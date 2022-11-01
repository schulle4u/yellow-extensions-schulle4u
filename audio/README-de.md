<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Audio 0.8.9

HTML5-Audio-Player.

<p align="center"><img src="audio-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man den Player verwendet

Erstelle eine `[audio]`-Abkürzung.
 
Die folgenden Argumente sind verfügbar, mit Ausnahme des ersten Arguments sind alle Angaben optional:

`url` = URL zur Audiodatei, z. B. OGG oder MP3  
`download` = Zeige einen Download-Link für die Audiodatei, 1 oder 0  
`style` = CSS-Klasse für den Player 

Diese Erweiterung stellt einen einfachen Audio-Player zur Verfügung, welcher das HTML5-Tag `<audio>` verwendet. Es sollte von allen modernen Webbrowsern unterstützt werden. 

## Beispiele

Eine Audiodatei einbetten:

    [audio /media/downloads/demo.mp3]

Eine Audiodatei einbetten, Stil anpassen:

    [audio /media/downloads/episode-47.mp3 - right]

Audiodatei von einer externen URL abrufen und Downloads erlauben: 

    [audio http://wolke.robbenradio.de/podcasts/rt033_yellow.mp3 1]

Hier ist eine Seite mit Standalone-Audioplayer:

```
---
Title: Audio
TitleSlug: audio
Layout: audio
---
[audio http://stream.powerradio4u.de:8000/p4u.mp3 autoplay]
```

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`AudioDownload` = Zeige einen Download-Link für Audiodateien, 1 oder 0  
`AudioUrlPrefix` = URL-Präfix für Audiodateien (z. B. für Dateien, die auf einem CDN ausgelagert sind)  
`AudioStyle` = CSS-Klasse für den Player  

Die folgende Datei kann angepasst werden:

`system/layouts/audio.html` = Layout-Datei für den Standalone-Audioplayer  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/audio.zip) und die ZIP-Datei in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

Audio 0.8.6
===========
HTML5-Audio-Player.

<p align="center"><img src="audio-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/audio.zip). Falls du Safari verwendest, rechtsklicke und wähle 'Verknüpfte Datei laden unter'.
3. Kopiere `audio.zip` in dein `system/extensions`-Verzeichnis.

Zum Deinstallieren lösche einfach die [Erweiterungsdateien](extension.ini).

## Wie man den Player verwendet

Erstelle eine `[audio]`-Abkürzung.
 
Die folgenden Argumente sind verfügbar, mit Ausnahme des ersten Arguments sind alle Angaben optional:

`url` = URL zur Audiodatei, z. B. OGG oder MP3  
`download` = Zeige einen Download-Link für die Audiodatei, 1 oder 0  
`style` = CSS-Klasse für den Player 

Diese Erweiterung stellt einen einfachen Audio-Player zur Verfügung, welcher das HTML5-Tag `<audio>` verwendet. Es sollte von allen modernen Webbrowsern unterstützt werden. 

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden:

`AudioDownload` = Zeige einen Download-Link für Audiodateien, 1 oder 0  
`AudioUrlPrefix` = URL-Präfix für Audiodateien  
`AudioStyle` = CSS-Klasse für den Player  

Die folgende Datei kann angepasst werden:

`system/layouts/audio.html` = Layout-Datei für den Standalone-Audioplayer  

## Beispiel

Eine Audiodatei einbetten:

    [audio /media/downloads/demo.mp3]
    [audio /media/downloads/episode-47.mp3 - player2]
    [audio http://wolke.robbenradio.de/podcasts/rt033_yellow.mp3 1]

Du kannst auch Audio-Streams einbetten. Auch wenn die `[audio]`-Abkürzung Streams abspielen kann, existiert die etwas einfachere `[audiostream]`-Abkürzung um seltene Konfigurationsprobleme zu umgehen, z. B. falls  `audioUrlPrefix` verwendet wird: 

    [audiostream http://stream.powerradio4u.de:8000/p4u.mp3 autoplay]

Hier ist eine Seite mit Standalone-Audioplayer:

```
---
Title: Audio
TitleSlug: audio
Layout: audio
---
[audiostream http://stream.powerradio4u.de:8000/p4u.mp3 autoplay]
```

## Entwickler

Steffen Schultz. [Support finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Include 0.9.1

Seiteninhalt von anderen Seiten einbinden.

<p align="center"><img src="SCREENSHOT.png" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung installiert

[ZIP-Datei herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/main/downloads/include.zip) und in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Wie man Seiteninhalte einbindet

Erstelle eine `[include]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, mit Ausnahme des ersten Arguments sind alle Angaben optional:

`Location` = Ort der einzubindenden Seite  
`Mode` = Anzeigemodus, `full` oder `teaser`  

Diese Erweiterung kann genutzt werden, um beispielsweise Anreißertexte (Teaser) in Seitenübersichten zu erstellen. Der `Teaser`-Modus sucht nach einem `[--more--]`-Tag um einen Seitenumbruch zu generieren, während im `Full`-Modus der vollständige Seiteninhalt eingebunden wird. 

## Beispiele

Inhaltsdatei mit Anreißern:

```
---
Title: Unser Team
---
Wir arbeiten hart, aber wir lieben es. Lies hier mehr über unsere Team-Mitglieder! 

[include /about/steffen teaser]

[include /about/john teaser]

[include /about/somebody-else teaser]
```

Eine Blogseite einbinden: 

    [include /blog/made-for-people]

## Danksagung

Vielen Dank an die Datenstrom-Yellow-Gemeinschaft für Hilfe und Feedback!

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

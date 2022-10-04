<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Include 0.8.5

Bindet den Inhalt anderer Seiten in die aktuelle Seite ein. 

<p align="center"><img src="include-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man Seiteninhalte einbindet

Erstelle eine `[include]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, mit Ausnahme des ersten Arguments sind alle Angaben optional:

`location` = Ort des einzubindenden Seiteninhalts relativ zur Yellow-Basis-URL (Beispiel: `/about/`).  
`mode` = Anzeigemodus (full oder teaser, Standard: full)

Diese Erweiterung kann genutzt werden, um beispielsweise Anreißertexte (Teaser) in Seitenübersichten zu erstellen. Der `Teaser`-Modus sucht nach einem `[--more--]`-Tag um einen Seitenumbruch zu generieren, während im `Full`-Modus der vollständige Seiteninhalt eingebunden wird. 

## Beispiele

Hier ist eine Beispielseite mit Anreißern: 

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


## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/include.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

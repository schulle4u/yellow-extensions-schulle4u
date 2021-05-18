<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

Daily 0.8.5
===========
Tägliche Seiten anzeigen.

<p align="center"><img src="daily-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man tägliche Seiten anzeigt

Erstelle eine `[daily]`-Abkürzung. Definiere eine `Daily`-Einstellung in den Seiten, die als tägliche Seiten angezeigt werden sollen. Verwende hierzu die numerischen Werte für jeden Wochentag, z. B. 1 für Montag, 2 für Dienstag. 

Die folgenden optionalen Argumente sind verfügbar: 

`day` = Numerischer Wochentag (Standard: aktueller Tag).  
`format` = Seiten als Liste oder Anreißer darstellen (list oder teaser, Standard: teaser).

## Beispiele

Seiten für den aktuellen Wochentag anzeigen: 

    [daily]

Seiten für Samstag als Liste anzeigen:

    [daily 6 list]

Hier ist eine Beispielseite. 

````
---
Title: Donnerstag
TitleContent: Unsere Sendungen am Donnerstag
Daily: 4
---
Um 20:00 Uhr präsentiert euch Steffen wieder die neueste Musik aus der Creative-Commons-Gemeinschaft. Anschließend geht es ab 22:00 Uhr mit Instrumentalmusik durch die Nacht. 
````

Du kannst auch mehrere Wochentage angeben: 

````
---
Title: Playlist Weltmusik
TitleContent: Playlist Weltmusik
Daily: 1, 2
---
Komm' gut in die Woche mit unserer spannenden Weltmusik-Playlist. Jeden Montag und Dienstag ab 20:00 Uhr.
````

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/daily.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Steffen Schultz. [Hilfe finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

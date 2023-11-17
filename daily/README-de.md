<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Daily 0.8.7

Tägliche Seiten anzeigen.

<p align="center"><img src="SCREENSHOT.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung installiert

[ZIP-Datei herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/main/downloads/daily.zip) und in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Wie man tägliche Seiten anzeigt

Erstelle eine `[daily]`-Abkürzung. Definiere eine `Daily`-Einstellung in den Seiten, die als tägliche Seiten angezeigt werden sollen. Verwende hierzu die numerischen Werte für jeden Wochentag, z. B. 1 für Montag, 2 für Dienstag. 

Die folgenden optionalen Argumente sind verfügbar: 

`Day` = Numerischer Wochentag, 1-7  
`Format` = Seiten als Liste oder Anreißer darstellen, `list` oder `teaser`  

## Beispiele

Seiten für den aktuellen Wochentag anzeigen: 

    [daily]

Seiten für Samstag als Liste anzeigen:

    [daily 6 list]

Inhaltsdatei für eine tägliche Seite:

````
---
Title: Donnerstag
TitleContent: Unsere Sendungen am Donnerstag
Daily: 4
---
Um 20:00 Uhr präsentiert euch Steffen wieder die neueste Musik aus der Creative-Commons-Gemeinschaft. Anschließend geht es ab 22:00 Uhr mit Instrumentalmusik durch die Nacht. 
````

Inhaltsdatei für mehrere Wochentage:

````
---
Title: Playlist Weltmusik
TitleContent: Playlist Weltmusik
Daily: 1, 2
---
Komm' gut in die Woche mit unserer spannenden Weltmusik-Playlist. Jeden Montag und Dienstag ab 20:00 Uhr.
````

## Danksagung

Vielen Dank an die Datenstrom-Yellow-Gemeinschaft für Hilfe und Feedback!

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

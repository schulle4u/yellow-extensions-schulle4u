Daily 0.8.5
===========
Zeige tägliche Seiten an.


## Wie man tägliche Seiten anzeigt

Erstelle eine `[daily]`-Abkürzung. Definiere eine `Daily`-Einstellung in den Seiten, die als tägliche Seiten angezeigt werden sollen. Verwende hierzu die numerischen Werte für jeden Wochentag, z. B. 1 für Montag, 2 für Dienstag. 

## Beispiele

Seiten für den aktuellen Wochentag anzeigen: 

    [daily]

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

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

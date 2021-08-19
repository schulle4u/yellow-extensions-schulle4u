<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Random 0.8.7

Zufällige Seiten anzeigen.

<p align="center"><img src="random-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man zufällige Seiten anzeigt

Erstelle eine `[random]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, mit Ausnahme des ersten Arguments sind alle Angaben optional:

`location` = Ort für zufällige Seiten (Beispiel: `/blog/`).  
`pagesMax` = Wie viele Seiten sollen angezeigt werden? (Standard: 5).  
`mode` = Anzeigemodus für zufällige Seiten (full, teaser oder list). 

In den Modi `full` und `teaser` werden Seitentitel und Inhalt in die aktuelle Seite eingebettet. Hiermit können beispielsweise zufällige Zitate, Seitenvorschauen oder Bilder angezeigt werden.  
Der `List`-Modus erstellt eine Liste zufälliger Seiten, die sich gut in eine Blog-Sidebar einbauen lässt. 

## Beispiele

Wählt eine zufällige Seite aus einer Zitatesammlung und zeigt deren Inhalt an:

    [random /quotes/ 1 full]

Listet 5 zufällige Blogbeiträge auf: 

    [random /blog/ 5 list]

Zeigt eine zufällige Seite als Anreißertext an: 

    [random /products/ 1 teaser]

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/random.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Steffen Schultz. [Hilfe finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

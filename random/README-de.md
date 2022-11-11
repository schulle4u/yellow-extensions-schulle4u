<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Random 0.8.8

Zufällige Seiten anzeigen.

<p align="center"><img src="random-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man zufällige Seiten anzeigt

Erstelle eine `[random]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, mit Ausnahme des ersten Arguments sind alle Angaben optional:

`Location` = Ort für zufällige Seiten  
`PagesMax` = Anzahl der zufälligen Seiten  
`Mode` = Anzeigemodus für zufällige Seiten, z. B. `full`, `teaser`, `list`  

In den Modi `full` und `teaser` werden Seitentitel und Inhalt in die aktuelle Seite eingebettet. Hiermit können beispielsweise zufällige Zitate, Seitenvorschauen oder Bilder angezeigt werden. Der `List`-Modus erstellt eine Liste zufälliger Seiten, die sich gut in eine Blog-Sidebar einbauen lässt. 

## Beispiele

Wählt eine zufällige Seite aus einer Zitatesammlung und zeigt deren Inhalt an:

    [random /quotes/ 1 full]

Listet 5 zufällige Blogbeiträge auf: 

    [random /blog/ 5 list]

Zeigt eine zufällige Seite als Anreißertext an: 

    [random /products/ 1 teaser]

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/random.zip) und die ZIP-Datei in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

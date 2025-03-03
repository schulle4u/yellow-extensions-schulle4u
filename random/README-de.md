<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Random 0.8.10

Zufällige Seiten anzeigen.

<p align="center"><img src="SCREENSHOT.png" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung installiert

[ZIP-Datei herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/main/downloads/random.zip) und in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Wie man zufällige Seiten anzeigt

Erstelle eine `[random]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, mit Ausnahme des ersten Arguments sind alle Angaben optional:

`Location` = Ort für zufällige Seiten  
`EntriesMax` = Anzahl der zufälligen Seiten  
`Mode` = Anzeigemodus für zufällige Seiten, z. B. `full`, `teaser`, `list`  

In den Modi `full` und `teaser` werden Seitentitel und Inhalt in die aktuelle Seite eingebettet. Hiermit können beispielsweise zufällige Zitate, Seitenvorschauen oder Bilder angezeigt werden. Der `List`-Modus erstellt eine Liste zufälliger Seiten, die sich gut in eine Blog-Sidebar einbauen lässt. 

## Beispiele

Wählt eine zufällige Seite aus einer Zitatesammlung und zeigt deren Inhalt an:

    [random /quotes/ 1 full]

Listet 5 zufällige Blogbeiträge auf: 

    [random /blog/ 5 list]

Zeigt eine zufällige Seite als Anreißertext an: 

    [random /products/ 1 teaser]

## Danksagung

Vielen Dank an die Datenstrom-Yellow-Gemeinschaft für Hilfe und Feedback!

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

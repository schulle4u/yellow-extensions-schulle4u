<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Readingtime 0.8.21

Zeigt die geschätzte Lesezeit für den Seiteninhalt an.

<p align="center"><img src="readingtime-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung installiert

[ZIP-Datei herunterladen](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/readingtime.zip) und in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Wie man die geschätzte Lesezeit anzeigt

Erstelle eine `[readingtime]`-Abkürzung. Das folgende optionale Argument ist verfügbar: 

`WordsPerMinute` = Die Anzahl Wörter pro Minute, die zur Berechnung der Lesezeit verwendet wird  

Mit dieser Inline-Abkürzung kann den Besuchern deiner Webseite eine ungefähre Lesezeit angezeigt werden, was für längere Blog- und Wiki-Artikel eine nette Zusatzinformation ist. Je nach Inhalt und lesegeschwindigkeit wird dieser Wert jedoch abweichen, daher kannst du ihn für dein Publikum entsprechend anpassen. 

## Beispiele

Allgemeine Verwendung: 

    Geschätzte Lesezeit: [readingtime] Minuten.

Berechne die Lesezeit mit 400 Wörtern pro Minute:

    Geschätzte lesezeit: [readingtime 400] Minuten.

## Einstellungen

Die folgende Einstellung kann in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`ReadingtimeWordsPerMinute` = Die Anzahl Wörter pro Minute, die zur Berechnung der Lesezeit verwendet wird  

## Danksagung

Vielen Dank an die Datenstrom-Yellow-Gemeinschaft für Hilfe und Feedback!

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

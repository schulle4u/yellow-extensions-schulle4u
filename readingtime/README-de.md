<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Readingtime 0.8.20

Zeigt die geschätzte Lesezeit für den Seiteninhalt an.

<p align="center"><img src="readingtime-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man die geschätzte Lesezeit anzeigt

Erstelle eine `[readingtime]`-Abkürzung. Das folgende optionale Argument ist verfügbar: 

`WordsPerMinute` = Die Anzahl Wörter pro Minute, die zur Berechnung der Lesezeit verwendet wird (Standard: 250).

Mit dieser Inline-Abkürzung kann den Besuchern deiner Webseite eine ungefähre Lesezeit angezeigt werden, was für längere Blog- und Wiki-Artikel eine nette Zusatzinformation ist. Je nach Inhalt und lesegeschwindigkeit wird dieser Wert jedoch abweichen, daher kannst du ihn für dein Publikum entsprechend anpassen. 

## Beispiele

Allgemeine Verwendung: 

    Geschätzte Lesezeit: [readingtime] Minuten.

Berechne die Lesezeit mit mehr Wörtern pro Minute: 

    Geschätzte lesezeit: [readingtime 400] Minuten.

## Einstellungen

Die folgende Einstellung kann in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`ReadingtimeWordsPerMinute` = Die Anzahl Wörter pro Minute, die zur Berechnung der Lesezeit verwendet wird (Standard: 250).

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/readingtime.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

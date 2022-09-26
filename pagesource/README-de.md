<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Pagesource 0.8.7

Markdown-Quelltext auf Seiten anzeigen.

<p align="center"><img src="pagesource-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man den Markdown-Quelltext anzeigt

Erstelle eine `[pagesource]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, alle Angaben sind optional: 

`Style` = Stil des Quelltext-Buttons, z. B. left, center oder right.

Mit dieser Erweiterung kann man jeder beliebigen Seite einen Quelltext-Button hinzufügen, welcher den Seiteninhalt als Markdown-Quelltext anzeigt. Die Seiten-Einstellungen werden vom Quelltext ausgeschlossen, auch werden keine anderen Shortcut-Inhalte geparst. Du kannst diese Erweiterung beispielsweise verwenden, um eine vereinfachte Druckansicht anzubieten, das Exportieren von Inhalten für Plaintext-Umgebungen zu erlauben, oder um allen zu zeigen, wie einfach das Erstellen schöner Webseiten mit Markdown sein kann. 

## Beispiele

Einbetten eines Quelltext-Buttons:

    [pagesource]

Einbetten eines Quelltext-Buttons, Stil anpassen:

    [pagesource right]

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`PagesourceStyle` = Standard-Stil des Quelltext-Buttons

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/downloads/pagesource.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Steffen Schultz. [Hilfe finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

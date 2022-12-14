<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Pagesource 0.8.8

Markdown-Quelltext auf Seiten anzeigen.

<p align="center"><img src="pagesource-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung installiert

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/pagesource.zip) und die ZIP-Datei in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Wie man den Markdown-Quelltext anzeigt

Erstelle eine `[pagesource]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, alle Angaben sind optional: 

`Style` = Stil des Buttons, z. B. `left`, `center`, `right`  

Mit dieser Erweiterung kann man jeder beliebigen Seite einen Button hinzufügen, welcher den Seiteninhalt als Markdown-Quelltext anzeigt. Die Seiten-Einstellungen werden vom Quelltext ausgeschlossen, auch werden keine anderen Shortcut-Inhalte geparst. Du kannst diese Erweiterung beispielsweise verwenden, um eine vereinfachte Druckansicht anzubieten, das Exportieren von Inhalten für Plaintext-Umgebungen zu erlauben, oder um allen zu zeigen, wie einfach das Erstellen schöner Webseiten mit Markdown sein kann. 

## Beispiele

Einbetten eines Buttons:

    [pagesource]

Einbetten eines Buttons, Stil anpassen:

    [pagesource right]

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`PagesourceStyle` = Standard-Stil des Buttons

## Danksagung

Vielen Dank an die Datenstrom-Yellow-Gemeinschaft für Hilfe und Feedback!

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

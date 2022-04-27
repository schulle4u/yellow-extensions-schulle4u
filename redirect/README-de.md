<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Redirect 0.8.3

Alternative Seitenweiterleitung.

<p align="center"><img src="redirect-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man eine Weiterleitung erstellt

Verwende die folgenden Seiten-Einstellungen: 

`RedirectLocation` = Ziel für die Weiterleitung (Beispiel: `https://datenstrom.se`).  
`RedirectTime` = Zeit in Sekunden bis zur Weiterleitung (Standard: 5).

Erstelle optional eine `[redirect]`-Abkürzung, um einen Countdown für Besucher anzuzeigen. 

Diese Erweiterung stellt eine alternative Weiterleitungsfunktion auf andere Seiten oder URLs zur Verfügung. Im Gegensatz zur Datenstrom Yellows [eingebauten Weiterleitung](https://github.com/datenstrom/yellow-extensions/tree/master/source/core/README-de.md) können Besucher vor der Weiterleitung erfahren, wohin sie weitergeleitet werden. 

## Beispiele

Hier ist eine Beispielseite mit Weiterleitung: 

```
---
Title: Weiterleitung...
RedirectLocation: https://datenstrom.se
RedirectTime: 10
---
Weiterleitung in [refresh] Sekunden. Falls du nicht automatisch weitergeleitet wirst, [klicke hier, um die Seite zu öffnen](https://datenstrom.se).
```

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`RedirectTime` = Zeit in Sekunden bis zur Weiterleitung (Standard: 5).

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/redirect.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Steffen Schultz. [Hilfe finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

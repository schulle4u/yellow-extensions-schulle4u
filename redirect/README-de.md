Redirect 0.8.3
==============
Alternative Seitenweiterleitung.

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/redirect.zip). Falls du Safari verwendest, rechtsklicke und wähle 'Verknüpfte Datei laden unter'.
3. Kopiere `redirect.zip` in dein `system/extensions`-Verzeichnis.

Zum Deinstallieren lösche einfach die [Erweiterungsdateien](extension.ini).

## Wie man eine Weiterleitung erstellt

Verwende die folgenden Seiten-Einstellungen: 

`RedirectLocation` = Ziel für die Weiterleitung (Beispiel: `https://datenstrom.se`).  
`RedirectTime` = Zeit in Sekunden bis zur Weiterleitung (Standard: 5).

Erstelle optional eine `[redirect]`-Abkürzung, um einen Countdown für Besucher anzuzeigen. 

Diese Erweiterung stellt eine alternative Weiterleitungsfunktion auf andere Seiten oder URLs zur Verfügung. Im Gegensatz zur in Yellow verfügbaren Weiterleitung können Besucher vor der Weiterleitung erfahren, wohin sie weitergeleitet werden. 

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden:

`RedirectTime` = Zeit in Sekunden bis zur Weiterleitung (Standard: 5).

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

## Entwickler

Steffen Schultz. [Support finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>


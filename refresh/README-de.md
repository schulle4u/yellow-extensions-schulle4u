Refresh 0.8.1
=============
URL-Weiterleitung mittels Meta-Refresh. 

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/refresh.zip). Falls du Safari verwendest, rechtsklicke und wähle 'Verknüpfte Datei laden unter'.
3. Kopiere `refresh.zip` in dein `system/extensions`-Verzeichnis.

Zum Deinstallieren lösche einfach die [Erweiterungsdateien](extension.ini).

## Wie man eine URL-Weiterleitung erstellt

Verwende die folgenden Seiten-Einstellungen: 

`Refresh` = Ziel-URL für die Weiterleitung (Beispiel: `https://datenstrom.se`).  
`RefreshTime` = Zeit in Sekunden bis zur Weiterleitung (Standard: 5).

Erstelle optional eine `[refresh]`-Abkürzung, um einen Countdown für Besucher anzuzeigen. 

Diese Erweiterung stellt eine alternative Weiterleitungsfunktion auf andere Seiten oder URLs zur Verfügung, welche auf dem sogenannten Meta-Refresh basiert. Zwar enthält Yellow bereits die Seiteneinstellung `Redirect`, welche jedoch keine zeitverzögerte Weiterleitung erlaubt. Mittels dieser Erweiterung können Besucher erfahren, wohin sie beim Öffnen einer Seite gelangen. 

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden:

`RefreshTime` = Zeit in Sekunden bis zur Weiterleitung (Standard: 5).

## Beispiele

Hier ist eine Beispielseite mit Weiterleitung: 

```
---
Title: Weiterleitung...
Refresh: https://datenstrom.se
RefreshTime: 10
---
Weiterleitung in [refresh] Sekunden. Falls du nicht automatisch weitergeleitet wirst, [klicke hier, um die Seite zu öffnen](https://datenstrom.se).
```

## Entwickler

Steffen Schultz

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>


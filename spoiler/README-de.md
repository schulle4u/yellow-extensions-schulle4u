<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Spoiler 0.8.8

Bestimmte Seitenelemente verstecken.

<p align="center"><img src="spoiler-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung installiert

[ZIP-Datei herunterladen](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/spoiler.zip) und in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Wie man Seiteninhalte versteckt

Erstelle eine `[spoilerstart]`-Abkürzung, füge die zu versteckenden Inhalte ein und schließe mit einer `[spoilerstop]`-Abkürzung den Spoiler.
 
Die folgenden Argumente sind verfügbar, alle Angaben sind optional:

`Id` = Eine ID für den Spoiler, wird für mehr als einen Spoiler pro Seite benötigt  
`Label` = Eigener Text für den Link zum Ein- und Ausblenden des Spoilers, umschließe mehrere Wörter mit Anführungszeichen  
`Display` = Anzeige-Stil, `block` oder `none`

Versteckte Elemente werden nicht entfernt, sondern mittels Javascript versteckt. 

## Beispiele

Inhaltsdatei mit verstecktem Textblock:

```
---
Title: Spoiler-beispiel
---
Klicke auf das Symbol zum Einblenden. 

[spoilerstart text1]  

Dieser Text ist standardmäßig ausgeblendet. Falls du ihn jetzt lesen kannst, hast du das richtige Symbol geklickt. Du kannst beliebigen Inhalt einfügen; Text, Links, Bilder, sogar weitere Abkürzungen sind möglich. 

[spoilerstop]

Hier kann weiterer Inhalt stehen. 
```

## Danksagung

Vielen Dank an die Datenstrom-Yellow-Gemeinschaft für Hilfe und Feedback!

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

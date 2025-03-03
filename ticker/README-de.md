<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Ticker 0.9.1

RSS-Feed-Leser.

<p align="center"><img src="SCREENSHOT.png" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung installiert

[ZIP-Datei herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/main/downloads/ticker.zip) und in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Wie man RSS-Feeds anzeigt

Erstelle eine `[ticker]`-Abkürzung.

Die folgenden Argumente sind verfügbar, mit Ausnahme des ersten Arguments sind alle Angaben optional:

`RssUrl` = URL des RSS-Feeds  
`ShortcutEntries` = Anzahl anzuzeigender Einträge  
`Style` = Zu verwendende CSS-Klasse  

Diese Erweiterung liest alle gängigen RSS- und Atom-Feeds. Für ein Schnelleres Laden der Einträge wird Caching unterstützt. 

## Beispiele

Zeigt die neuesten Einträge eines RSS-Feeds:

    [ticker http://example.com/feed.xml]
    [ticker http://example.com/feed.xml 5]
    [ticker http://example.com/feed.xml 10]

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden: 

`TickerShowDate` = Datumsangabe neben Feed-Einträgen, 1 oder 0  
`TickerShowDescription` = Beschreibungen der Einträge anzeigen, 1 oder 0  

## Danksagung

Diese Erweiterung enthält [SimplePie 1.6](http://simplepie.org/) von Ryan Parman, Geoffrey Sneddon, Ryan McCue und Mitwirkende. Vielen Dank für eure Arbeit!

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

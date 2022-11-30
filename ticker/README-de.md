<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Ticker 0.8.10

RSS-Feed-Leser.

<p align="center"><img src="ticker-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man RSS-Feeds anzeigt

Erstelle eine `[ticker]`-Abkürzung.

Die folgenden Argumente sind verfügbar, mit Ausnahme des ersten Arguments sind alle Angaben optional:

`RssUrl` = URL des RSS-Feeds  
`EntriesMax` = Anzahl anzuzeigender Einträge  
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

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/ticker.zip) und die ZIP-Datei in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

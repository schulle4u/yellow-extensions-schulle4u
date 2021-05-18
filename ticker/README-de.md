<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

Ticker 0.8.10
=============
RSS-Feed-Leser.

<p align="center"><img src="ticker-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man RSS-Feeds anzeigt

Erstelle eine `[ticker]`-Abkürzung.

Die folgenden Argumente sind verfügbar, mit Ausnahme des ersten Arguments sind alle Angaben optional:

`RssUrl` = URL des RSS-Feeds  
`NumEntries` = Anzahl anzuzeigender Einträge  
`Style` = Zu verwendende CSS-Klasse  

Diese Erweiterung liest alle gängigen RSS- und Atom-Feeds. Für ein Schnelleres Laden der Einträge wird Caching unterstützt. 

## Beispiele

Zeigt die neuesten Einträge eines RSS-Feeds:

    [ticker http://example.com/feed.xml]
    [ticker http://example.com/feed.xml 5]
    [ticker http://example.com/feed.xml 10]

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden: 

`TickerShowDate` = Datumsangabe neben Feed-Einträgen (Standard: 1).  
`TickerShowDescription` = Beschreibungen der Einträge anzeigen (Standard: 1).  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/ticker.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

[SimplePie parser 1.5](http://simplepie.org/) von Ryan Parman, Geoffrey Sneddon, Ryan McCue und Beitragende, freigegeben unter den Bedingungen der [BSD-Lizenz](http://www.opensource.org/licenses/BSD-3-Clause). 

## Entwickler

Steffen Schultz. [Hilfe finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

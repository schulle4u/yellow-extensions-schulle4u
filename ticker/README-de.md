Ticker 0.8.8
============
RSS-Feed-Leser.

<p align="center"><img src="ticker-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man RSS-Feeds anzeigt

Erstelle eine `[ticker]`-Abkürzung.
 
Die folgenden Argumente sind verfügbar, mit Ausnahme des ersten Arguments sind alle Angaben optional:

`RssUrl` = URL des RSS-Feeds  
`NumEntries` = Anzahl anzuzeigender Einträge  
`Style` = Zu verwendende CSS-Klasse  

Diese Erweiterung liest Standard-RSS-Feeds. Um auch Atom-Feeds zu lesen, ändere `TickerAdvancedParser: 1` in deiner `system/settings/system.ini`, um stattdessen den erweiterten SimplePie-Parser zu verwenden. SimplePie erlaubt des Weiteren das Caching von Feed-Inhalten. Bei Problemen prüfe bitte die Zugriffsrechte des Verzeichnisses `/cache`. 

## Beispiele

Zeigt die neuesten Einträge eines RSS-Feeds:

    [ticker http://example.com/feed.xml]
    [ticker http://example.com/feed.xml 5]
    [ticker http://example.com/feed.xml 10]

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden: 

`TickerShowDate` = Datumsangabe neben Feed-Einträgen (Standard: 1).  
`TickerShowDescription` = Beschreibungen der Einträge anzeigen (Standard: 1).  
`TickerAdvancedParser` = Verwende SimplePie anstelle der PHP-Funktion  `simplexml_load_file` (siehe unten für weitere informationen) (Standard: 0).  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/ticker.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

[SimplePie parser 1.5](http://simplepie.org/) von Ryan Parman, Geoffrey Sneddon, Ryan McCue und Beitragende, freigegeben unter den Bedingungen der [BSD-Lizenz](http://www.opensource.org/licenses/BSD-3-Clause). 

## Entwickler

Steffen Schultz. [Hilfe finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

Ticker 0.8.4
============
RSS-Feed-Leser.

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/ticker.zip). Falls du Safari verwendest, rechtsklicke und wähle 'Verknüpfte Datei laden unter'.
3. Kopiere `ticker.zip` in dein `system/extensions`-Verzeichnis.

Zum Deinstallieren lösche einfach die [Erweiterungsdateien](extension.ini).

## Wie man RSS-Feeds anzeigt

Erstelle eine `[ticker]`-Abkürzung.
 
Die folgenden Argumente sind verfügbar, mit Ausnahme des ersten Arguments sind alle Angaben optional:

`RssUrl` = URL des RSS-Feeds  
`NumEntries` = Anzahl anzuzeigender Einträge  
`Style` = Zu verwendende CSS-Klasse  

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden: 

`TickerShowDate` = Datumsangabe neben Feed-Einträgen (Standard: 1).  
`TickerShowDescription` = Beschreibungen der Einträge anzeigen (Standard: 1).  
`TickerAdvancedParser` = Verwende SimplePie anstelle der PHP-Funktion  `simplexml_load_file` (siehe unten für weitere informationen) (Standard: 0).  

Diese Erweiterung liest Standard-RSS-Feeds. Um auch Atom-Feeds zu lesen, ändere `TickerAdvancedParser: 1` in deiner `system/settings/system.ini`. Hierdurch wird [SimplePie parser 1.5](http://simplepie.org/) von Ryan Parman, Geoffrey Sneddon, Ryan McCue und Beitragende verwendet, freigegeben unter den Bedingungen der [BSD-Lizenz](http://www.opensource.org/licenses/BSD-3-Clause). SimplePie erlaubt des Weiteren das Caching von Feed-Inhalten. Bei Problemen prüfe bitte die Zugriffsrechte des Verzeichnisses `/cache`. 

Inspiriert durch Code von [Webdesign Weisshart](https://webdesign.weisshart.de/rss2html.php)

## Beispiel

Zeigt die neuesten Einträge eines RSS-Feeds:

    [ticker http://example.com/feed.xml]
    [ticker http://example.com/feed.xml 5]
    [ticker http://example.com/feed.xml 10]

## Entwickler

Steffen Schultz

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Radioboss 0.8.13

Widgets für RadioBoss Cloud.

<p align="center"><img src="radioboss-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung installiert

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/radioboss.zip) und die ZIP-Datei in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Wie man RadioBoss-Widgets einbettet

Erstelle eine `[radioboss]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, bis auf das erste Argument sind alle Angaben optional: 

`Widget` = Widget-Typ.  
`Arguments` = Eine durch Leerzeichen getrennte Liste von Widget-Agumenten, falls verfügbar.   
`Style` = RadioBoss-Stil, z. B. `left`, `center`, `right`.  
`Server` = die RadioBoss-Server-Instanz, z. B. `c2.radioboss.fm`.  
`Port` = Streaming-Port, z. B. `8010`.  
`Port2` = Port für sichere Verbindungen, z. B. `18010`.  
`Id` = die letzten zwei bis drei Ziffern des Ports, z. B. `10`.  
`Mount` = der Streaming-Einhängepunkt ohne führenden Schrägstrich, z. B. `stream`. 

Die folgenden Widgets stehen zur Verfügung: 

`Miniplayer` = ein Miniplayer für deinen Stream, unterstützt optionale Argumente.  
`Player` = ein Webplayer für deinen stream.  
`Nowplaying` = momentan laufender Titel.  
`Cover` = Album-Cover für aktuellen Titel.  
`Recent` = zuletzt gespielte Titel, unterstützt optionale Argumente.  
`Links` = eine Liste der Streaming-Links.  
`Page` = ein Link zur automatisch erstellten Stream-Seite. 

Du solltest wissen, dass der Dienstanbieter personenbezogene Daten sammelt und Cookies benutzt.

## Beispiele

Miniplayer mit Standardkonfiguration:

    [radioboss miniplayer]

Miniplayer mit optionalen Argumenten (Breite in Pixel, Farben für aktive und ausgegraute Schaltflächen):

    [radioboss miniplayer "86 #111111 #b3b3b3"]

Normaler Webplayer:

    [radioboss player]

Zeige die letzten 20 Titel:

    [radioboss recent 20]

Webplayer, anderer Stream:

    [radioboss player - - c2.radioboss.fm 8017 18017 17 stream]

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`RadiobossServer` = die RadioBoss-Server-Instanz, z. B. `c2.radioboss.fm`.  
`RadiobossPort` = Streaming-Port, z. B. `8010`.  
`RadiobossPort2` = Port für sichere Verbindungen, z. B. `18010`.  
`RadiobossId` = die letzten zwei bis drei Ziffern des Ports, z. B. `10`.  
`RadiobossMount` = der Streaming-Einhängepunkt ohne führenden Schrägstrich, z. B. `stream`. 
`RadiobossListeners` = zeige Höreranzahl im Nowplaying-Widget.  
`RadiobossNexttrack` = zeige den nächsten Titel im Nowplaying-Widget.  
`RadiobossTrackCount` = Anzahl zuletzt gespielter Titel, maximal 20.  
`RadiobossStyle` = RadioBoss-Stil, z. B. `left`, `center`, `right`.  

## Danksagung

Vielen Dank an die Datenstrom-Yellow-Gemeinschaft für Hilfe und Feedback!

Diese Erweiterung verwendet [RadioBoss Cloud](https://www.radioboss.fm/radioboss-cloud/) von DJSoft. Vielen Dank für den Dienst.

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

Radioboss 0.8.6
===============
Widgets für RadioBoss Cloud.

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/radioboss.zip). Falls du Safari verwendest, rechtsklicke und wähle 'Verknüpfte Datei laden unter'.
3. Kopiere `radioboss.zip` in dein `system/extensions`-Verzeichnis.

Zum Deinstallieren lösche einfach die [Erweiterungsdateien](extension.ini).

## Wie man RadioBoss-Widgets einbettet

Erstelle eine `[radioboss]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, bis auf das erste Argument sind alle Angaben optional: 

`widget` = Widget-Typ (siehe unten für eine Liste verfügbarer Widgets).  
`arguments` = Eine durch Leerzeichen getrennte liste optionaler Widget-Argumente, sofern verfügbar. Umschließe mehrere Argumente mittels Anführungszeichen.  
`style` = Zu verwendende CSS-Klasse, z. B. left, center, right.  
`server` = Hostname der Cloud-Instanz ohne einleitendes `https://` (Beispiel: `c2.radioboss.fm`).  
`port` = Streaming-Port (Beispiel: `8010`).  
`port2` = Zweiter Streaming-Port, wird für sichere Verbindungen verwendet. Wenn nicht angegeben, setzt er sich aus Streaming-Port mit einer führenden 1 zusammen (Beispiel: `18010`).  
`id` = Momentan sind dies die beiden letzten Ziffern des Streaming-Ports (Beispiel: `10`).  
`mount` = Einhängepunkt deines Streams ohne führenden Schrägstrich (Beispiel: `stream`). 

Die folgenden Widgets stehen zur Verfügung: 

`miniplayer` = Ein konfigurierbarer Miniplayer. Die zusätzliche Konfiguration erfolgt über den Arguments-Parameter, siehe Beispiel unten.   
`player` = Ein Web-Player für deinen Stream.  
`nowplaying` = Zeigt den gerade gespielten Titel an.  
`cover` = Album-Cover für den aktuellen Titel.  
`recent` = Zeigt die zuletzt gespielten Titel an.  
`links` = Zeigt eine Liste der Streaming-Links.  
`page` = Zeigt einen Link zur automatisch erstellten Stream-Seite von RadioBoss Cloud an. 

Die Erweiterung verwendet [RadioBoss Cloud](https://www.radioboss.fm/radioboss-cloud/), eine Cloud-basierte Radio-Automationslösung von [DJSoft.net](https://www.djsoft.net). 

*Hinweis*: RadioBoss Cloud befindet sich in stetiger Weiterentwicklung, daher können sich auch die Funktionen der Erweiterung von Zeit zu Zeit verändern. Einige Widgets sind nicht mit allen Browsern kompatibel, und werden es voraussichtlich auch nie sein. Besonders der Internet Explorer hat Probleme mit den verwendeten Javascript-Komponenten.  

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden:

`RadiobossServer` = Hostname der Cloud-Instanz ohne einleitendes `https://` (Beispiel: `c2.radioboss.fm`).  
`RadiobossPort` = Streaming-Port (Beispiel: `8010`).  
`RadiobossPort2` = Zweiter Streaming-Port, wird für sichere Verbindungen verwendet. Wenn nicht angegeben, setzt er sich aus Streaming-Port mit einer führenden 1 zusammen (Beispiel: `18010`).  
`RadiobossId` = Momentan sind dies die beiden letzten Ziffern des Streaming-Ports (Beispiel: `10`).  
`RadiobossMount` = Einhängepunkt deines Streams ohne führenden Schrägstrich (Beispiel: `stream`). 
`RadiobossListeners` = Zeige Höreranzahl im Nowplaying-Widget (Standard: `0`).  
`RadiobossTrackCount` = Anzahl zuletzt gespielter Titel (1 - 20, Standard: 10).  
`RadiobossStyle` = Zu verwendende CSS-Klasse, z. B. left, center, right. 

Die Server-Konfiguration erhältst du im Reiter Information, nachdem du dich bei deiner RadioBoss Cloud angemeldet hast. 

## Beispiel

Hier ist eine Beispielseite mit allen verfügbaren Widgets. 

```
---
Title: Was ist los?
Author: Steffen
---
## Live hören

Miniplayer mit Standardkonfiguration:   
[radioboss miniplayer]

Miniplayer mit benutzerdefinierter Konfiguration (Breite in Pixel, Farbe des aktiven Buttons, Farbe für ausgegrauten Button):   
[radioboss miniplayer "86 #111111 #b3b3b3"]

Normaler Web-Player:  
[radioboss player]

## Aktueller Titel

[radioboss nowplaying]

[radioboss cover]

## Zuletzt gespielt

[radioboss recent 20]

## Wie man uns hören kann

[radioboss links]

## RadioBoss Stream-Seite

[radioboss page]

## Ein weiteres Widget für einen zweiten Stream

[radioboss nowplaying - - c2.radioboss.fm 8017 18017 17 stream]
```

## Entwickler

Steffen Schultz mit Code von DJSoft.net. [Support finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Icecast 0.8.3

Icecast-Statistiken.

## Wie man Icecast-Statistiken anzeigt

Erstelle eine `[icecast]`-Abkürzung:. 

Die folgenden Argumente sind verfügbar, alle Angaben sind optional:

`Info` = Informationstyp, z. B. title, listeners, peak, bitrate, genre.  
`Server` = Hostname oder IP deines Servers.  
`Port` = Port der Icecast-Instanz.  
`Mount` = Einhängepunkt des Streams. 

Diese Erweiterung stellt grundlegende Statistiken für einen Icecast-Server zur Verfügung. Sie bezieht ihre Informationen aus der Datei `status-json.xsl`, daher wird Icecast => Version 2.4.0 benötigt. Da diese Erweiterung kein Javascript verwendet, sind Echtzeit-Statistiken nicht möglich. 

## Beispiele

Das gerade laufende Lied anzeigen:

    Gerade läuft: [icecast]

Höreranzahl anzeigen:

    Hörer: [icecast listeners]  
    Maximale Hörer: [icecast peak]

Einen anderen Server verwenden: 

    Gerade läuft: [icecast title stream.beispiel.de 8000 /stream.mp3]

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`IcecastServer` = Hostname oder IP deines Servers.  
`IcecastPort` = Port der Icecast-Instanz.  
`IcecastMount` = Einhängepunkt des Streams. 

## Installation

[Erweiterung herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/icecast.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Steffen Schultz. [Hilfe finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

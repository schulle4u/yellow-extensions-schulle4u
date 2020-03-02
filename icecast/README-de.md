Icecast 0.8.2
=============
Icecast-Statistiken.

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/icecast.zip). Falls du Safari verwendest, rechtsklicke und wähle 'Verknüpfte Datei laden unter'.
3. Kopiere `icecast.zip` in dein `system/extensions`-Verzeichnis.

Zum Deinstallieren lösche einfach die [Erweiterungsdateien](extension.ini).

## Wie man Icecast-Statistiken anzeigt

Erstelle eine `[icecast]`-Abkürzung:. 

Die folgenden Argumente sind verfügbar, alle Angaben sind optional:

`Info` = Informationstyp, z. B. title, listeners, peak, bitrate, genre.  
`Server` = Hostname oder IP deines Servers.  
`Port` = Port der Icecast-Instanz.  
`Mount` = Einhängepunkt des Streams. 

Diese Erweiterung stellt grundlegende Statistiken für einen Icecast-Server zur Verfügung. Sie bezieht ihre Informationen aus der Datei `status-json.xsl`, daher wird Icecast => Version 2.4.0 benötigt. Da diese Erweiterung kein Javascript verwendet, sind Echtzeit-Statistiken nicht möglich. 

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden:

`IcecastServer` = Hostname oder IP deines Servers.  
`IcecastPort` = Port der Icecast-Instanz.  
`IcecastMount` = Einhängepunkt des Streams. 

## Beispiel

Das gerade laufende Lied anzeigen:

    Gerade läuft: [icecast]

Höreranzahl anzeigen:

    Hörer: [icecast listeners]  
    Maximale Hörer: [icecast peak]

Einen anderen Server verwenden: 

    Gerade läuft: [icecast title stream.beispiel.de 8000 /stream.mp3]


## Entwickler

Steffen Schultz. [Support finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

Podcast 0.8.5
=============
Web-Feed optimiert für die Podcast-Veröffentlichung.

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/podcast.zip). Falls du Safari verwendest, rechtsklicke und wähle 'Verknüpfte Datei laden unter'.
3. Kopiere `podcast.zip` in dein `system/extensions`-Verzeichnis.
4. Optional: [Audio-Erweiterung](https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/audio) herunterladen und installieren. 

Zum Deinstallieren lösche einfach die [Erweiterungsdateien](extension.ini).

## Wie man den Podcast verwendet

Der Podcast-Feed ist auf deiner Website verfügbar als `http://website/podcast/` und `http://website/podcast/page:podcast.xml`. Es ist ein Feed für die gesamte Website, nur sichtbare Seiten sind enthalten. Um einen Blog-Podcast-Feed zu erstellen, öffne die Datei `system/settings/system.ini` und ändere `PodcastFilterLayout: blog`. Der Feed kann auch nach Tag oder Autor gefiltert werden, verwende hierzu eine URL wie etwa `http://website/podcast/tag:serie1/page:podcast.xml` Du kannst einen Link zum Podcast irgendwo auf der Website platzieren. 

Diese Erweiterung basiert auf der originalen [Feed-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/features/feed).

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden:

`PodcastLocation` = Ort des Podcasts  
`PodcastFileXml` = XML-Dateiname für den RSS-Feed  
`PodcastFilterLayout` = Podcast-Layout-Filter, Standard ist blog  
`PodcastPaginationLimit` = Anzahl Einträge pro Seite  
`PodcastMimeType` = Mime-Typ der Mediendateien, Standard ist audio/mpeg (mp3)  
`PodcastImageUrl` = URL zu deinem Podcast-Bild.  
`PodcastImageWidth` und `PodcastImageHeight` = Bildabmessungen in Pixel.  
`PodcastExplicit` = Enthält dein Podcast eindeutige Inhalte? Standard ist `no`.  
`PodcastItunesBlock` = Blockiere das iTunes-Verzeichnis? Standard ist `no`.  
`PodcastCategory` und `PodcastSubcategory` = iTunes-Kategorienamen. Derzeit werden entweder eine Hauptkategorie oder eine Hauptkategorie und Unterkategorie unterstützt.  

Des Weiteren können folgende Seiten-Metadaten angegeben werden: 

`Mediafile` = URL zur Podcast-Mediendatei.  
`Duration` = Dauer der Episode im Format HH:MM:SS (von iTunes benötigt).  

*Hinweis*: pro Episode wird lediglich die Angabe einer Mediendatei benötigt. Alle weiteren Angaben sind optional, sind jedoch für eine erfolgreiche Auflistung im iTunes-Verzeichnis erforderlich

## Beispiel

Definiere einige allgemeine Metadaten für deinen Podcast in der Datei `content/podcast/page.md`. 

```
---
Title: Mein Podcast
Description: Ein einzelner Satz zum Beschreiben deines Podcasts.
Layout: podcast
Tag: Podcast, Audio, Technology
---
This page is automatically generated.
```

Hier ist eine Blogseite mit Medieninhalten. 

```
---
Title: Eine neue Podcast-Episode
Published: 2018-01-01 12:45:00
Author: Steffen
Tag: cool, stuff
Layout: blog
Mediafile: http://cdn.yourdomain.tld/podcast/files/episode1.mp3
Duration: 00:10:00
---
Dies ist der Artikel zu deiner Podcast-Episode.[--more--] Es sollte ein Seitenumbruch verwendet werden, um deinen Hörern eine Zusammenfassung für ihre Podcatcher zu geben. Des Weiteren kann [irgendwo im Text](http://cdn.yourdomain.tld/podcast/files/episode1.mp3) die Episode für einen direkten Download verlinkt werden. 
```

## Entwickler

Datenstrom, modifiziert von Steffen Schultz

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

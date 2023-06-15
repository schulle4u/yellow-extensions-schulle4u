<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Podcast 0.8.20

Web-Feed optimiert für die Podcast-Veröffentlichung.

<p align="center"><img src="podcast-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung installiert

[ZIP-Datei herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/main/downloads/podcast.zip) und in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Wie man den Podcast verwendet

Der Podcast-Feed ist auf deiner Website verfügbar als `http://website/podcast/` und `http://website/podcast/page:podcast.xml`. Es ist ein Feed für die gesamte Website, nur sichtbare Seiten sind enthalten. Der Feed kann auch nach Tag oder Autor gefiltert werden, verwende hierzu eine URL wie etwa `http://website/podcast/tag:serie1/page:podcast.xml` Du kannst einen Link zum Podcast irgendwo auf der Website platzieren. 

Pro Podcast-Episode wird eine `Mediafile`-Einstellung benötigt. Alle weiteren Angaben sind optional, sind jedoch für eine erfolgreiche Auflistung im iTunes-Verzeichnis erforderlich.

## Beispiele

Definiere einige allgemeine Einstellungen für deinen Podcast in der Datei `content/podcast/page.md`: 

```
---
Title: Mein Podcast
Description: Ein einzelner Satz zum Beschreiben deines Podcasts.
Layout: podcast
Tag: Podcast, Audio, Technology
---
This page is automatically generated.
```

Blogseite mit Einstellungen für deinen Podcast:

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

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`PodcastLocation` = Ort des Podcasts  
`PodcastFileXml` = XML-Dateiname für den RSS-Feed  
`PodcastPaginationLimit` = Anzahl Einträge pro Seite  
`PodcastMimeType` = MIME-Typ der eingebundenen Mediendateien  
`PodcastImageUrl` = URL zu deinem Podcast-Bild  
`PodcastImageWidth` = Bildbreite in Pixel  
`PodcastImageHeight` = Bildhöhe in Pixel  
`PodcastExplicit` = Podcast enthält eindeutige Inhalte, `yes` oder `no`  
`PodcastItunesBlock` = Blockiere das iTunes-Verzeichnis, `yes` oder `no`  
`PodcastCategory` = iTunes-Podcast-Kategoriename, z. B. `Music`  
`PodcastSubcategory` = iTunes-Podcast-Unterkategoriename  

Die folgenden Einstellungen können ganz oben auf einer Seite vorgenommen werden:

`Mediafile` = URL zur Podcast-Mediendatei  
`Duration` = Dauer der Episode im Format HH:MM:SS  

## Danksagung

Diese Erweiterung basiert auf der originalen [Feed-Erweiterung](https://github.com/annaesvensson/yellow-feed) von Anna Svensson. Vielen Dank für deine Arbeit!

## Entwickler

Datenstrom, modifiziert von Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

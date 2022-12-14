<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Podcast 0.8.15

Web feed optimized for podcast publishing.

<p align="center"><img src="podcast-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install an extension

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/podcast.zip) and copy ZIP file into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to use the podcast

The podcast feed is available on your website as `http://website/podcast/` and `http://website/podcast/page:podcast.xml`. It's a feed for the entire website, only visible pages are included. To make a blog podcast feed open file `system/extensions/yellow-system.ini` and change `PodcastFilterLayout: blog`. It is also possible to filter podcasts by tag or author, use an URL like `http://website/podcast/tag:series1/page:podcast.xml` You can add a link to the podcast somewhere on your website. 

Per podcast episode a `Mediafile` setting is mandatory. All other settings are optional, but are required for a proper iTunes directory listing.

## Examples

Define some general settings for your podcast in file `content/podcast/page.md`: 

```
---
Title: My podcast
Description: A single sentence to describe the podcast.
Layout: podcast
Tag: Podcast, Audio, Technology
---
This page is automatically generated.
```

Blog page with settings for your podcast:

```
---
Title: A new podcast episode
Published: 2018-01-01 12:45:00
Author: Steffen
Tag: cool, stuff
Layout: blog
Mediafile: http://cdn.yourdomain.tld/podcast/files/episode1.mp3
Duration: 00:10:00
---
This is the article for your podcast episode.[--more--] It is recommended to use a page break to provide your listeners with a summary for their podcatchers. Furthermore you should link the media file [somewhere in this text](http://cdn.yourdomain.tld/podcast/files/episode1.mp3) for direct download. 
```

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`PodcastLocation` = podcast location  
`PodcastFileXml` = feed file name for RSS podcast feed  
`PodcastFilterLayout` = podcast layout filter, e.g. `blog`  
`PodcastPaginationLimit` = number of entries to show per page  
`PodcastMimeType` = MIME type of included media files  
`PodcastImageUrl` = URL to your podcast image  
`PodcastImageWidth` = image width in pixel  
`PodcastImageHeight` = image heigh in pixel  
`PodcastExplicit` = podcast contains explicit content, `yes` or `no`  
`PodcastItunesBlock` = block iTunes directory from listing your podcast, `yes` or `no`  
`PodcastCategory` = iTunes podcast category name, e.g. `Music`  
`PodcastSubcategory` = iTunes podcast subcategory name  

The following settings can be configured at the top of a page:

`Mediafile` = URL to the podcast media file  
`Duration` = the duration of the episode in the format HH:MM:SS  

## Acknowledgements

This extension is based on the original [feed extension](https://github.com/annaesvensson/yellow-feed) by Anna Svensson. Thanks for your work!

## Developer

Datenstrom with modifications by Steffen Schultz. [Get help](https://datenstrom.se/yellow/help/).

<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Podcast 0.8.14

Web feed optimized for podcast publishing.

<p align="center"><img src="podcast-screenshot.png?raw=true" alt="Screenshot"></p>

## How to use the podcast

The podcast feed is available on your website as `http://website/podcast/` and `http://website/podcast/page:podcast.xml`. It's a feed for the entire website, only visible pages are included. To make a blog podcast feed open file `system/extensions/yellow-system.ini` and change `PodcastFilterLayout: blog`. It is also possible to filter podcasts by tag or author, use an URL like `http://website/podcast/tag:series1/page:podcast.xml` You can add a link to the podcast somewhere on your website. 

## Examples

Define some general metadata for your podcast in `content/podcast/page.md`. 

```
---
Title: My podcast
Description: A single sentence to describe the podcast.
Layout: podcast
Tag: Podcast, Audio, Technology
---
This page is automatically generated.
```

Here is a blog page with included media content. 

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
`PodcastFilterLayout` = podcast layout filter, default is blog  
`PodcastPaginationLimit` = number of entries to show per page  
`PodcastMimeType` = mimetype of included files, default is audio/mpeg (mp3)  
`PodcastImageUrl` = URL to your podcast image.  
`PodcastImageWidth` and `PodcastImageHeight` = image dimensions in pixel.  
`PodcastExplicit` = Does your podcast contain explicit content? Default is no.  
`PodcastItunesBlock` = Block iTunes directory from listing your podcast, default is no.  
`PodcastCategory` and `PodcastSubcategory` = iTunes podcast category names. Currently only one category or one category and one subcategory is supported.  

Additionally, the following page metadata can be specified: 

`Mediafile` = URL to the podcast media file.  
`Duration` = the duration of the episode in the format HH:MM:SS (required for iTunes).  

*Note*: Only a media file is mandatory for the podcast. All other settings are optional, but are required for propper iTunes directory listing. 

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/downloads/podcast.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

Based on the original [feed extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/feed).

## Developer

Datenstrom with modifications by Steffen Schultz. [Get help](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

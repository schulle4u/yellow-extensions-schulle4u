<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Daily 0.8.6

Show daily pages.

<p align="center"><img src="daily-screenshot.png?raw=true" alt="Screenshot"></p>

## How to show daily pages

Create a `[daily]` shortcut. On the pages you wish to show as daily pages, define a `Daily` entry in your page settings. Use the numeric representation for the day of the week, e.g. 1 for monday, 2 for tuesday. 

The following optional arguments are available: 

`Day` = numeric value for the day of the week, 1-7  
`Format` = show pages as `list` or `teaser`  

## Examples

Showing all pages for the current weekday: 

    [daily]

Showing pages for saturday as list: 

    [daily 6 list]

Content file for a daily page:

````
---
Title: Thursday
TitleContent: Our shows on thurstday
Daily: 4
---
Tune in at 8 pm CET for Steffens latest live show, presenting great music from the creative commons community. Instrumental music follows at 10 pm all through the night. 
````

Content file for multiple days:

````
---
Title: Playlist world
TitleContent: World music playlist
Daily: 1, 2
---
Start off the week with our exciting mix of music from all around the world. Tune in mondays and tuesdays at 8 pm CET. 
````

## Acknowledgements

Thanks to the Datenstrom Yellow community for help and feedback!

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/daily.zip) and copy ZIP file into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## Developer

Steffen Schultz. [Get help](https://datenstrom.se/yellow/help/).

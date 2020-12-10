Daily 0.8.5
===========
Show daily pages.


## How to show daily pages

Create a `[daily]` shortcut. On the pages you wish to show as daily pages, define a `Daily` entry in your page settings. Use the numeric representation for the day of the week, e. g. 1 for monday, 2 for tuesday. 

## Examples

Showing all pages for the current weekday: 

    [daily]

Here is an example content file. 

````
---
Title: Thursday
TitleContent: Our shows on thurstday
Daily: 4
---
Tune in at 8 pm CET for Steffens latest live show, presenting great music from the creative commons community. Instrumental music follows at 10 pm all through the night. 
````

You can define multiple day values: 

````
---
Title: Playlist world
TitleContent: World music playlist
Daily: 1, 2
---
Start off the week with our exciting mix of music from all around the world. Tune in mondays and tuesdays at 8 pm CET. 
````

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/daily.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Steffen Schultz. [Get help](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

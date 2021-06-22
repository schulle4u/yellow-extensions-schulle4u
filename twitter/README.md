<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

Twitter 0.8.6
=============
Embed Twitter messages.

<p align="center"><img src="twitter-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to embed a message

Create a `[twitter]` shortcut. 

The following arguments are available, all but the first argument are optional:
 
`Id` = last part of a [Twitter](https://www.twitter.com) link, e.g. `https://twitter.com/dog_feelings/status/1169078881963261953`  
`Theme` = message theme, e.g. `light`, `dark`  
`Style` = message style, e.g. `left`, `center`, `right`  
`Width` = message width, pixel or percent  
`Height` = message height, pixel or percent  

## Examples

Embedding a tweet:

    [twitter 1169078881963261953]
    [twitter 1169078881963261953 dark]
    [twitter 1169078881963261953 light right]

Embedding a timeline:

    [twitter dog_feelings]
    [twitter dog_feelings/likes]
    [twitter dog_feelings/likes light - 250 250]

Embedding a follow button:

    [twitterfollow dog_feelings]

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`TwitterTheme` = message theme, e.g. `light`, `dark`  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/twitter.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

This extension uses [Twitter](https://www.twitter.com). The service provider collects personal data and uses cookies.

## Developer

Steffen Schultz. [Get help](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

Random 0.8.7
============
Display random pages.

<p align="center"><img src="random-screenshot.png?raw=true" alt="Screenshot"></p>

## How to display random pages

Create a `[random]` shortcut. 

The following arguments are available, all but the first argument are optional:

`location` = The location for random pages (example: `/blog/`).  
`pagesMax` = How many random pages to show (default: 5).  
`mode` = Display mode for random pages (full, teaser or list). 

In full and teaser mode the page title and content are embedded into the current page. This can be useful to display e.g. random quotes, teasers or pictures.  
The list mode creates a clickable list of random pages, useful e.g. in a blog sidebar. 

## Examples

Selects a random page from a collection of quotes and displays the content:

    [random /quotes/ 1 full]

Lists 5 randomly selected blog posts:

    [random /blog/ 5 list]

Show a random page in teaser mode: 

    [random /products/ 1 teaser]

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/random.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Steffen Schultz. [Get help](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

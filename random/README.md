Random 0.8.3
======================
Display random pages from specified location.

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/random.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `random.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to display random pages

Create a `[random]` shortcut. 

The following arguments are available, all but the first argument are optional:

`location` = The location for random pages (example: `/blog/`).  
`pagesMax` = How many random pages to show (default: 5).  
`mode` = Display mode for random pages (full, teaser or list). 

In full and teaser mode the page title and content are embedded into the current page. This can be useful to display e.g. random quotes, teasers or pictures.  
The list mode creates a clickable list of random pages, useful e.g. in a blog sidebar. 

## Example

Selects a random page from a collection of quotes and displays the content. 

`[random /quotes/ 1 full]`

Lists 5 randomly selected blog posts. 

`[random /blog/ 5 list]`

## Developer

Steffen Schultz. [Get support](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

Random plugin 0.7.1
===================
Displays random pages from a specific location. 

## How to install plugin

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/schulle4u/yellow-plugin-random/archive/master.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `master.zip` into your `system/plugins` folder.

To uninstall delete the [plugin files](update.ini).

## How to use the random plugin

Create a `[random]` shortcut. 

The following arguments are available, all but the first argument are optional:

`location` = The location for random pages.  
`pagesMax` = How many random pages to show.  
`mode` = 0/1 content or list mode

In content mode the page title and content are embedded into the current page. This can be useful to display e.g. random quotes, teasers or pictures.  
The list mode creates a clickable list of random pages, useful e.g. in a blog sidebar. 

## Example

Selects a random page from a collection of quotes and displays the content. 

`[random /quotes/ 1 0]`

Lists 5 randomly selected blog posts. 

`[random /blog/ 5 1]`

## Developer

Steffen Schultz

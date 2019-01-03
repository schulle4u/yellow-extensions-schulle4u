Global plugin 0.7.5
===================
Includes page content into other pages. 

## How to install plugin

1. Download and install [Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/schulle4u/yellow-plugins-schulle4u/raw/master/zip/global.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `global.zip` into your `system/plugins` folder.

To uninstall delete the [plugin files](update.ini).

## How to use the global plugin

Create a `[global]` shortcut. 

The following arguments are available, all arguments are optional:

`location` = The location for global page content (default: `/global/sidebar`).  
`mode` = page display mode, 0 = include full page content, 1 = Include page as a teaser.  

This plugin is useful to e.g. create a global sidebar or teasers for certain pages. The teaser mode looks for a `[--more--]` tag as page break. 

## Example

Create or edit the file `content/global/sidebar.md` like you would do with a normal sidebar. Then create a sidebar using the `[global]` shortcut for every page you would like to display the global sidebar. Here is a sidebar content file which will display the content from `/global/sidebar`. Put this in every content folder and define it as sidebar in your `page.md` header. 

```
---
Title: Sidebar
Status: hidden
---
[global]

Some individual content for every sub page is still possible.
```

This will allow you to modify only one sidebar file, and changes will appear globally. 

Or to display a teaser: 

```
[global /blog/some-article 1]
```

## Developer

Steffen Schultz

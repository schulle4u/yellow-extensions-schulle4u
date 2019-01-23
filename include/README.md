Include plugin 0.7.7
====================
Includes page content into other pages. 

## How to install plugin

1. Download and install [Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/schulle4u/yellow-plugins-schulle4u/raw/master/zip/include.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `include.zip` into your `system/plugins` folder.

To uninstall delete the [plugin files](update.ini).

## How to use the include plugin

Create a `[include]` shortcut. 

The following arguments are available, all arguments are optional:

`location` = The location for included page content (default: `/shared/sidebar`).  
`mode` = page display mode, 0 = include full page content, 1 = Include page as a teaser.  

This plugin is useful to e.g. create a global sidebar or teasers for certain pages. The teaser mode looks for a `[--more--]` tag as page break. 

## Example

To create a global sidebar, edit or create the file `content/shared/sidebar.md`. Here is an example sidebar which includes this global sidebar. Put it in every content folder where the sidebar should be displayed. 

```
---
Title: Sidebar
Status: hidden
---
[include]

Some individual content for every sub page is still possible.
```

This will allow you to modify only one sidebar file, and changes will appear globally. 

Here is an example page with teasers: 

```
---
Title: Our team
---
We work hard, but we love it. Read full stories of our team members below! 

[include /about/steffen 1]

[include /about/john 1]

[include /about/somebody-else 1]
```

## Developer

Steffen Schultz

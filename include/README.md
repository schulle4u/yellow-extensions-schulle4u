Include 0.8.3
=============
Includes page content from other pages. 

## How to install extension

1. Download and install [Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/schulle4u/yellow-plugins-schulle4u/raw/master/zip/include.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `include.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to use the include extension

Create a `[include]` shortcut. 

The following arguments are available, all but the first arguments are optional:

`location` = The location for included page content (example: `/about/`).  
`mode` = page display mode (full or teaser, default: full)

This extension is useful to e.g. create teasers for page overviews. The `teaser` mode looks for a `[--more--]` tag as page break, while `full` mode includes the complete page content. 

## Example

Here is an example page with teasers: 

```
---
Title: Our team
---
We work hard, but we love it. Read full stories of our team members below! 

[include /about/steffen teaser]

[include /about/john teaser]

[include /about/somebody-else teaser]
```

## Developer

Steffen Schultz

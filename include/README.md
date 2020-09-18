Include 0.8.5
=============
Includes page content from other pages. 

<p align="center"><img src="include-screenshot.png?raw=true" alt="Screenshot"></p>

## How to include page content

Create a `[include]` shortcut. 

The following arguments are available, all but the first argument are optional:

`location` = The location for included page content (example: `/about/`).  
`mode` = page display mode (full or teaser, default: full)

This extension is useful to e.g. create teasers for page overviews. The `teaser` mode looks for a `[--more--]` tag as page break, while `full` mode includes the complete page content. 

## Examples

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

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/include.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Steffen Schultz. [Get help](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

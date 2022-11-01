<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Include 0.8.5

Includes page content from other pages. 

<p align="center"><img src="include-screenshot.png?raw=true" alt="Screenshot"></p>

## How to include page content

Create a `[include]` shortcut. 

The following arguments are available, all but the first argument are optional:

`location` = The location for included page content relative to Yellow's root URL (example: `/about/`).  
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

Including a blog page: 

    [include /blog/made-for-people]


## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/include.zip) and copy ZIP file into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## Developer

Steffen Schultz. [Get help](https://datenstrom.se/yellow/help/).

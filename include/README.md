<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Include 0.9.1

Include page content from other pages. 

<p align="center"><img src="SCREENSHOT.png" alt="Screenshot"></p>

## How to install an extension

[Download ZIP file](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/main/downloads/include.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to include page content

Create a `[include]` shortcut. 

The following arguments are available, all but the first argument are optional:

`Location` = location of included page  
`Mode` = page display mode, `full` or `teaser`  

This extension is useful to e.g. create teasers for page overviews. The `teaser` mode looks for a `[--more--]` tag as page break, while `full` mode includes the complete page content. 

## Examples

Content file with teasers:

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

## Acknowledgements

Thanks to the Datenstrom Yellow community for help and feedback!

## Developer

Steffen Schultz. [Get help](https://datenstrom.se/yellow/help/).

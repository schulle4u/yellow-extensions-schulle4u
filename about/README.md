About plugin 0.7.10
===================
Author profile for blog pages. 

<p align="center"><img src="about-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install plugin

1. Download and install [Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/schulle4u/yellow-plugins-schulle4u/raw/master/zip/about.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `about.zip` into your `system/plugins` folder.

To uninstall delete the [plugin files](update.ini).

## How to use the about plugin

Create a `[about]` shortcut. 

The following arguments are available, all arguments are optional:

`author` = name of page author.   
`style` = profile style. 

If the [blog plugin](https://github.com/datenstrom/yellow-plugins/tree/master/blog) is installed, author notes will automatically be inserted after each article. Use `Profile: author` in your page settings to specify a different profile. 

## How to configure about plugin

The following settings can be configured in file `system/config/config.ini`:

`AboutLocation` = The location for author profiles (default: `/profile/`).   
`AboutStyle` = Default profile style. 

## Example

Edit the file `content/profile/page.md` like you would do with a normal page. Write down a few notes about you. If you want an extended profile page, it is recommended to use a page break. You can create profile pages for every site author in the same directory. 

```
---
Title: About Yellow
---
Hello, I'm Datenstrom Yellow, the engine running this site. I help people to make websites. 
```

## Developer

Steffen Schultz

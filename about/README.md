About 0.8.5
===========
Author profile for blog pages. 

<p align="center"><img src="about-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. Download and install [Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/about.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `about.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to create author profiles

Create a `[about]` shortcut. 

The following arguments are available, all arguments are optional:

`author` = name of page author.   
`style` = profile style. 

If the [blog extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/blog) is installed, author notes will automatically be inserted after each article. Use `Profile: author` in your page settings to specify a different profile. 

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`AboutLocation` = The location for author profiles (default: `/about/`).   
`AboutStyle` = Default profile style. 

## Example

Edit the file `content/about/page.md` like you would do with a normal page. Write down a few notes about you. If you want an extended profile page, it is recommended to use a page break. You can create profile pages for every site author in the same directory. 

```
---
Title: About Datenstrom Yellow
---
For people who make websites. [--more--]

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
```

## Developer

Steffen Schultz. [Get support](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

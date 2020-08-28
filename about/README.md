About 0.8.7
===========
Author profile for blog pages. 

<p align="center"><img src="about-screenshot.png?raw=true" alt="Screenshot"></p>

## How to create author profiles

Create a `[about]` shortcut. 

The following arguments are available, all arguments are optional:

`author` = name of page author.   
`style` = profile style. 

If the [blog extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/blog) is installed, author notes will automatically be inserted after each article. Use `Profile: author` in your page settings to specify a different profile. 

## Example

Edit the file `content/about/page.md` like you would do with a normal page. Write down a few notes about you. If you want an extended profile page, it is recommended to use a page break. You can create profile pages for every site author in the same directory. 

```
---
Title: About Datenstrom Yellow
---
For people who make websites. [--more--]

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
```

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`AboutLocation` = The location for author profiles (default: `/about/`).   
`AboutStyle` = Default profile style. 

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/about.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Steffen Schultz. [Get help](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

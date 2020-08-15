Pagesource 0.8.6
================
Display page as markdown source.

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/pagesource.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `pagesource.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to display page source

Create a `[pagesource]` shortcut. 

The following arguments are available, all arguments are optional:

`Style` = pagesource style, e.g. left, center, right

This extension adds a "Source code" button to each page you would like to allow viewing the page source. The page will be rendered in raw markdown format, excluding page settings. Therefore other extension shortcuts within a page will not be parsed. You can use this extension to provide website visitors a simplified printing view, a content export for plaintext environments, or just to show how easy it is to write beautiful web pages in markdown. 

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`PagesourceStyle` = default pagesource style

## Example

Embedding a "Source code" button:

    [pagesource]
    [pagesource right]

## Developer

Steffen Schultz. [Get support](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>


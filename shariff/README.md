Shariff 0.8.3
=======================
Privacy-friendly social sharing buttons.

![Screenshot](shariff-screenshot.png?raw=true)

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download and install Fontawesome extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/fontawesome).   
3. [Download extension](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/shariff.zip). If you are using Safari, right click and select 'Download file as'.
4. Copy `shariff.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to use sharing buttons

The extension adds social sharing buttons, while protecting the privacy of your visitors. Buttons are shown on blog and wiki pages. To show buttons on other pages create a `[shariff]` shortcut or use HTML `<div class="shariff"></div>`. See example below.

The extension uses [Shariff v2.1.3](https://github.com/heiseonline/shariff) by Heise. It's licensed under [MIT license](https://opensource.org/licenses/MIT).

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`ShariffServices` = social sharing services,  e.g. `twitter, facebook, info`  

## Example

For basic usage put the following code into your content files: 

`<div class="shariff"></div>`

For [advanced options](https://github.com/heiseonline/shariff#options-data-attributes) there are data attributes: 

`<div class="shariff" data-lang="en"></div>`

## Developer

Steffen Schultz featuring Heise Online

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/website/media/images/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/website/media/images/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

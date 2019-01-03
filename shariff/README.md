Shariff plugin 0.7.2
====================
Privacy-friendly social sharing buttons.

![Screenshot](shariff-screenshot.png?raw=true)

## How to install plugin

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download and install Fontawesome plugin](https://github.com/datenstrom/yellow-plugins/tree/master/fontawesome).   
3. [Download plugin](https://github.com/schulle4u/yellow-plugins-schulle4u/raw/master/zip/shariff.zip). If you are using Safari, right click and select 'Download file as'.
4. Copy `shariff.zip` into your `system/plugins` folder.

To uninstall delete the [plugin files](update.ini).

## How to use sharing buttons

The plugin adds social sharing buttons, while protecting the privacy of your visitors. Buttons are shown on blog and wiki pages. To show buttons on other pages create a `[shariff]` shortcut or use HTML `<div class="shariff"></div>`. See example below.

The plugin uses [Shariff v2.1.3](https://github.com/heiseonline/shariff) by Heise. It's licensed under [MIT license](https://opensource.org/licenses/MIT).

## How to configure sharing buttons

The following settings can be configured in file `system/config/config.ini`:

`ShariffServices` = social sharing services,  e.g. `twitter, facebook, googleplus, info`  

## Example

For basic usage put the following code into your content files: 

`<div class="shariff"></div>`

For [advanced options](https://github.com/heiseonline/shariff#options-data-attributes) there are data attributes: 

`<div class="shariff" data-lang="en"></div>`

## Developer

Steffen Schultz

Private plugin 0.7.9
====================
Create password-protected pages.

<p align="center"><img src="private-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install plugin

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/schulle4u/yellow-plugins-schulle4u/raw/master/zip/private.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `private.zip` into your `system/plugins` folder.

To uninstall delete the [plugin files](update.ini).

## How to create protected pages

Use `password: your password` and `template: private` in your page settings. 

**Note**: Please use this plugin with caution. It doesn't protect any page data from being parsed by other plugins, it just hides the content behind a very basic password form in the output template. You can use some page settings to minimize data leaks, see example below. For real secrets you should consider a more secure solution. 

## Example

Here is an example page: 

```
---
Title: Protected page
Description: This page is protected. Please enter the correct password to access the content.
Password: protected
Template: private
---
This is a protected page. [--more--]

We use a page break for the actual protected content so that page listing plugins don't print out any of the protected information. The description setting must be used to remove unwanted content from page metadata, and to write down a short message for visitors. 
```

## Developer

Steffen Schultz

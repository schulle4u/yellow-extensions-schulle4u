Private extension 0.8.3
=======================
Create password-protected pages.

<p align="center"><img src="private-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/schulle4u/yellow-plugins-schulle4u/raw/master/zip/private.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `private.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to create protected pages

Use `status: private` and `password: your password` in your page settings. 

**Note**: Please use this extension with caution. It doesn't apply data encryption or protects page content from being parsed by other extensions, the extension only hides the content behind a very basic password form. You can use some page settings to minimize possible data leaks, see example below. 

## How to configure private extension

The following settings can be configured in file `system/settings/system.ini`:

`PrivateVisible` = Show private pages in navigation and search results (default: 0)  

## Example

Here is an example page: 

```
---
Title: Protected page
Description: This page is protected. Please enter the correct password to access the content.
Status: private
Password: protected
---
This is a protected page. [--more--]

We use a page break for the actual protected content so that page listing extensions don't print out any of the protected information. The description setting must be used to remove unwanted content from page metadata, and to write down a short message for visitors. 
```

## Developer

Steffen Schultz

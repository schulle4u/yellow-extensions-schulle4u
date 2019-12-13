Private 0.8.5
=============
Support for password-protected pages.

<p align="center"><img src="private-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/private.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `private.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to make a private page

Set `Status: private` and `Password` in the [settings](https://github.com/datenstrom/yellow-extensions/tree/master/features/core#settings) at the top of a page. The page will no longer be visible and you need to enter the password to access the content. You can continue to edit the page in the [web browser](https://github.com/datenstrom/yellow-extensions/tree/master/features/edit) and the file system.

## How to find private pages

You can use the [search extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/search). Once you're logged in with your user account, you can search for `status:private`. This allows you to find all private pages. 

## Examples

Content file with private status: 

```
---
Title: Private page
Status: private
Password: password
---
This page is private. Add more information here.
```

Content file with private status for wiki:

```
---
Title: Wiki page
Layout: wiki
Tag: Example
Status: private
Password: password
---
This page is private. Add more information here.
```

## Developer

Steffen Schultz

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

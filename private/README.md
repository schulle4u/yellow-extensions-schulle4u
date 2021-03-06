<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

Private 0.8.8
=============
Support for password-protected pages.

<p align="center"><img src="private-screenshot.png?raw=true" alt="Screenshot"></p>

## How to make a private page

Set `Status: private` and `Password` in the [page settings](https://github.com/datenstrom/yellow-extensions/tree/master/source/core#settings-page) at the top of a page. The page will no longer be visible and you need to enter the password to access the content. You can continue to edit the page in the [web browser](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit) and the file system.

## How to find private pages

You can use the [search extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/search). Once you're logged in with your user account, you can search for `status:private`. This allows you to find all private pages. 

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

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/private.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Steffen Schultz. [Get help](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Private 0.8.12

Support for password-protected pages.

<p align="center"><img src="private-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install an extension

[Download ZIP file](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/private.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to make a private page

Set `Status: private` and `Password` in the [page settings](https://github.com/annaesvensson/yellow-core#user-content-settings-page) at the top of a page. The page will no longer be visible and you need to enter the password to access the content. You can continue to edit the page in the [web browser](https://github.com/annaesvensson/yellow-edit) and on your [computer](https://github.com/annaesvensson/yellow-core).

## How to find private pages

You can use the [search extension](https://github.com/annaesvensson/yellow-search). Once you're logged in with your user account, you can search for `status:private`. This allows you to find all private pages. 

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

Content file with private status for the wiki:

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

Content file with private status for the blog:

```
---
Title: Blog example
Published: 2013-04-07
Author: Datenstrom
Layout: blog
Tag: Example
Status: private
Password: password
---
This page is private. Add more information here.
```

Layout file for showing all private pages:

```
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<?php $pages = $this->yellow->content->index(true, true)->filter("status", "private") ?>
<?php $this->yellow->page->setLastModified($pages->getModified()) ?>
<ul>
<?php foreach ($pages as $page): ?>
<li><?php echo $page->getHtml("title") ?></li>
<?php endforeach ?>
</ul>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

## Acknowledgements

Thanks to Kanbeq for the initial idea.

## Developer

Steffen Schultz. [Get help](https://datenstrom.se/yellow/help/).

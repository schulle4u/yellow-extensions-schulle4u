<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Private 0.8.12

Unterstützung für passwortgeschützte Seiten.

<p align="center"><img src="private-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung installiert

[ZIP-Datei herunterladen](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/private.zip) und in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Wie man private Seiten erstellt

Setze `Status: private` und `Password` in den [Seiteneinstellungen](https://github.com/annaesvensson/yellow-core/tree/main/README-de.md#user-content-einstellungen-seite) ganz oben auf der Seite. Die Seite ist dann nicht mehr sichtbar und man muss das Kennwort eingeben um auf den Inhalt zuzugreifen. Man kann die Seite weiterhin im [Webbrowser](https://github.com/annaesvensson/yellow-edit/tree/main/README-de.md) und auf deinem [Computer](https://github.com/annaesvensson/yellow-core/tree/main/README-de.md) bearbeiten.

## Wie man private Seiten findet

Du kannst die [Search-Erweiterung](https://github.com/annaesvensson/yellow-search/tree/main/README-de.md) verwenden. Sobald du mit deinem Benutzerkonto eingeloggt bist, kannst du nach `status:private` suchen. Das ermöglicht dir alle privaten Seiten zu finden.

## Beispiele

Inhaltsdatei mit privatem Status: 

```
---
Title: Private Seite
Status: private
Password: password
---
Diese Seite ist privat. Füge hier weitere Informationen hinzu.
```

Inhaltsdatei mit privatem Status fürs Wiki: 

```
---
Title: Wiki-Seite
Layout: wiki
Tag: Beispiel
Status: private
Password: password
---
Diese Seite ist privat. Füge hier weitere Informationen hinzu.
```

Inhaltsdatei mit privatem Status fürs Blog: 

```
---
Title: Blog-Seite
Published: 2013-04-07
Author: Datenstrom
Layout: blog
Tag: Beispiel
Status: private
Password: password
---
Diese Seite ist privat. Füge hier weitere Informationen hinzu.
```

Layoutdatei um alle privaten Seiten anzuzeigen:

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

## Danksagung

Vielen Dank an Kanbeq für die ursprüngliche Idee.

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

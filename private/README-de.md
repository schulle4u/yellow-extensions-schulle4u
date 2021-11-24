<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Private 0.8.9

Unterstützung für passwortgeschützte Seiten.

<p align="center"><img src="private-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man private Seiten erstellt

Setze `Status: private` und `Password` in den [Seiteneinstellungen](https://github.com/datenstrom/yellow-extensions/tree/master/source/core#settings-page) ganz oben auf der Seite. Die Seite ist dann nicht mehr sichtbar und man muss das Kennwort eingeben um auf den Inhalt zuzugreifen. Man kann die Seite weiterhin im [Webbrowser](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit) und im Dateisystem bearbeiten.

## Wie man private Seiten findet

Du kannst die [Search-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/search) verwenden. Sobald du mit deinem Benutzerkonto eingeloggt bist, kannst du nach `status:private` suchen. Das ermöglicht dir alle privaten Seiten zu finden.

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

Inhaltsdatei mit privatem Status im Wiki: 

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

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/private.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Steffen Schultz. [Hilfe finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

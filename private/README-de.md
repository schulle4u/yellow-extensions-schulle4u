Private 0.8.3
=============
Unterstützung für passwortgeschützte Seiten.

<p align="center"><img src="private-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/private.zip). Falls du Safari verwendest, rechtsklicke und wähle 'Verknüpfte Datei laden unter'.
3. Kopiere `private.zip` in dein `system/extensions`-Verzeichnis.

Zum Deinstallieren lösche einfach die [Erweiterungsdateien](extension.ini).

## Wie man private Seiten erstellt

Setze `Status: private` und `Password` in den [Einstellungen](https://github.com/datenstrom/yellow-extensions/tree/master/features/core#settings) ganz oben auf der Seite. Die Seite ist dann nicht mehr sichtbar und man muss das Kennwort eingeben um auf den Inhalt zuzugreifen. Man kann die Seite weiterhin im [Webbrowser](https://github.com/datenstrom/yellow-extensions/tree/master/features/edit) und im Dateisystem bearbeiten.

## Wie man private Seiten findet

Du kannst die [Search-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/features/search) verwenden. Sobald du mit deinem Benutzerkonto eingeloggt bist, kannst du nach `status:private` suchen. Das ermöglicht dir alle privaten Seiten zu finden.

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

## Entwickler

Steffen Schultz

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

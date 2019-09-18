Pagesource 0.8.2
================
Seiten als Markdown-Quelltext anzeigen.

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/pagesource.zip). Falls du Safari verwendest, rechtsklicke und wähle 'Verknüpfte Datei laden unter'.
3. Kopiere `pagesource.zip` in dein `system/extensions`-Verzeichnis.

Zum Deinstallieren lösche einfach die [Erweiterungsdateien](extension.ini).

## Wie man den Markdown-Quelltext anzeigt

Erstelle eine `[pagesource]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, alle Angaben sind optional: 

`Style` = Stil des Quelltext-Buttons, z. B. left, center oder right.

Mit dieser Erweiterung kann man jeder beliebigen Seite einen Quelltext-Button hinzufügen, welcher den Seiteninhalt als Markdown-Quelltext anzeigt. Die Seiten-Einstellungen werden vom Quelltext ausgeschlossen, auch werden keine anderen Shortcut-Inhalte geparst. Du kannst diese Erweiterung beispielsweise verwenden, um eine vereinfachte Druckansicht anzubieten, das Exportieren von Inhalten für Plaintext-Umgebungen zu erlauben, oder um allen zu zeigen, wie einfach das Erstellen schöner Webseiten mit Markdown sein kann. 

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden:

`PagesourceStyle` = Standard-Stil des Quelltext-Buttons

## Beispiel

Einbettung eines Quelltext-Buttons:

    [pagesource]
    [pagesource right]

## Entwickler

Steffen Schultz

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>


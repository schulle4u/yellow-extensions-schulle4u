Random 0.8.6
============
Zufällige Seiten eines bestimmten Ortes anzeigen.

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/random.zip). Falls du Safari verwendest, rechtsklicke und wähle 'Verknüpfte Datei laden unter'.
3. Kopiere `random.zip` in dein `system/extensions`-Verzeichnis.

Zum Deinstallieren lösche einfach die [Erweiterungsdateien](extension.ini).

## Wie man zufällige Seiten anzeigt

Erstelle eine `[random]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, mit Ausnahme des ersten Arguments sind alle Angaben optional:

`location` = Ort für zufällige Seiten (Beispiel: `/blog/`).  
`pagesMax` = Wie viele Seiten sollen angezeigt werden? (Standard: 5).  
`mode` = Anzeigemodus für zufällige Seiten (full, teaser oder list). 

In den Modi `full` und `teaser` werden Seitentitel und Inhalt in die aktuelle Seite eingebettet. Hiermit können beispielsweise zufällige Zitate, Seitenvorschauen oder Bilder angezeigt werden.  
Der `List`-Modus erstellt eine Liste zufälliger Seiten, die sich gut in eine Blog-Sidebar einbauen lässt. 

## Beispiel

Wählt eine zufällige Seite aus einer Zitatesammlung und zeigt deren Inhalt an. 

`[random /quotes/ 1 full]`

Listet 5 zufällige Blogbeiträge auf. 

`[random /blog/ 5 list]`

## Entwickler

Steffen Schultz. [Support finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

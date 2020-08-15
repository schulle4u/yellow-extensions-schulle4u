Include 0.8.5
=============
Bindet den Inhalt anderer Seiten in die aktuelle Seite ein. 

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/include.zip). Falls du Safari verwendest, rechtsklicke und wähle 'Verknüpfte Datei laden unter'.
3. Kopiere `include.zip` in dein `system/extensions`-Verzeichnis.

Zum Deinstallieren lösche einfach die [Erweiterungsdateien](extension.ini).

## Wie man Seiteninhalte einbindet

Erstelle eine `[include]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, mit Ausnahme des ersten Arguments sind alle Angaben optional:

`location` = Ort des einzubindenden Seiteninhalts (Beispiel: `/about/`).  
`mode` = Anzeigemodus (full oder teaser, Standard: full)

Diese Erweiterung kann genutzt werden, um beispielsweise Anreißertexte (Teaser) in Seitenübersichten zu erstellen. Der `Teaser`-Modus sucht nach einem `[--more--]`-Tag um einen Seitenumbruch zu generieren, während im `Full`-Modus der vollständige Seiteninhalt eingebunden wird. 

## Beispiel

Hier ist eine Beispielseite mit Anreißern: 

```
---
Title: Unser Team
---
Wir arbeiten hart, aber wir lieben es. Lies hier mehr über unsere Team-Mitglieder! 

[include /about/steffen teaser]

[include /about/john teaser]

[include /about/somebody-else teaser]
```

## Entwickler

Steffen Schultz. [Support finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

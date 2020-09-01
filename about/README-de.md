About 0.8.7
===========
Autorenprofil für Blogseiten. 

<p align="center"><img src="about-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man Autorenprofile erstellt

Erstelle eine `{abut]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, alle Angaben sind optional:

`author` = Name des Seiten-Autors.   
`style` = Stil des Profils. 

Falls die [Blog-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/blog) installiert ist, werden Autor-Informationen automatisch unter jeder Blogseite platziert. Verwende `Profile: author` in deinen seiteneinstellungen, um ein anderes Profil anzugeben. 

## Beispiele

Bearbeite die Datei `content/about/page.md` wie eine normale Seite und notiere einige Dinge über dich. Für umfangreiche Profilseiten solltest du einen Seitenumbruch verwenden. Du kannst für jeden deiner Autoren eine Profilseite im selben Verzeichnis anlegen. 

```
---
Title: About Datenstrom Yellow
---
Für Menschen die Webseiten machen. [--more--]

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
```

Individuelle Profilseiten anzeigen:

    [about deinname]
    [about weiterername]


## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden:

`AboutLocation` = Ort für Autorenprofile (Standard: `/about/`).   
`AboutStyle` = Standard-Stil für Profile. 

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/about.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Steffen Schultz. [Hilfe finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

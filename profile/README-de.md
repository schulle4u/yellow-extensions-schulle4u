<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Profile 0.8.9

Autorenprofil für Blogseiten. 

<p align="center"><img src="profile-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man Autorenprofile erstellt

Erstelle eine `{profile]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, alle Angaben sind optional:

`author` = Name des Seiten-Autors.   
`style` = Stil des Profils. 

Falls die [Blog-Erweiterung](https://github.com/annaesvensson/yellow-blog/tree/main/README-de.md) installiert ist, werden Autor-Informationen automatisch unter jeder Blogseite platziert. Verwende `Profile: author` in deinen seiteneinstellungen, um ein anderes Profil anzugeben. 

## Beispiele

Bearbeite die Datei `content/profile/page.md` wie eine normale Seite und notiere einige Dinge über dich. Für umfangreiche Profilseiten solltest du einen Seitenumbruch verwenden. Du kannst für jeden deiner Autoren eine Profilseite im selben Verzeichnis anlegen. 

```
---
Title: Autorenprofil
---
Für Menschen die kleine Webseiten machen. [--more--]

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
in culpa qui officia deserunt mollit anim id est laborum.

Diese Webseite ist erstellt mit [Datenstrom Yellow](https://datenstrom.se/de/yellow/). 
```

Individuelle Profilseiten anzeigen:

    [profile deinname]
    [profile weiterername]


## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`ProfileLocation` = Ort für Autorenprofile (Standard: `/profile/`).   
`ProfileStyle` = Standard-Stil für Profile. 

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/profile.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

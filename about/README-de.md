About 0.8.3
===========
Autorenprofil für Blogseiten. 

<p align="center"><img src="about-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/about.zip). Falls du Safari verwendest, rechtsklicke und wähle 'Verknüpfte Datei laden unter'.
3. Kopiere `about.zip` in dein `system/extensions`-Verzeichnis.

Zum Deinstallieren lösche einfach die [Erweiterungsdateien](extension.ini).

## Wie man Autorenprofile erstellt

Erstelle eine `{abut]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, alle Angaben sind optional:

`author` = Name des Seiten-Autors.   
`style` = Stil des Profils. 

Falls die [Blog-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/features/blog) installiert ist, werden Autor-Informationen automatisch unter jeder Blogseite platziert. Verwende `Profile: author` in deinen seiteneinstellungen, um ein anderes Profil anzugeben. 

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden:

`AboutLocation` = Ort für Autorenprofile (Standard: `/profile/`).   
`AboutStyle` = Standard-Stil für Profile. 

## Beispiel

Bearbeite die Datei `content/profile/page.md` wie eine normale Seite und notiere einige Dinge über dich. Für umfangreiche Profilseiten solltest du einen Seitenumbruch verwenden. Du kannst für jeden deiner Autoren eine Profilseite im selben Verzeichnis anlegen. 

```
---
Title: Über Yellow
---
Hallo, ich bin datenstrom yellow und ich bringe diese Seite zum Laufen. Ich helfe Menschen, Webseiten zu machen. 
```

## Entwickler

Steffen Schultz

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

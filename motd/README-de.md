Motd 0.8.4
==========
Nachricht des Tages.

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/motd.zip). Falls du Safari verwendest, rechtsklicke und wähle 'Verknüpfte Datei laden unter'.
3. Kopiere `motd.zip` in dein `system/extensions`-Verzeichnis.

Zum Deinstallieren lösche einfach die [Erweiterungsdateien](extension.ini).

## Wie man eine Nachricht des Tages erstellt

Erstelle in deinen Seiten-Metadaten eine Nachricht für jeden Wochentag mittels der Einstellungen motd1 bis Motd7. Anschließend erstelle eine `[motd]`-Abkürzung, wo die Nachricht angezeigt werden soll. 

## Beispiel

Hier ist eine Beispielseite. 

````
---
Title: Seitentitel
motd1: Heute ist Montag
motd2: Dienstag, die Woche ist noch immer viel zu lang
Motd3: Mittwoch, es ist Licht am Horizont
motd4: Donnerstag, man nennt ihn auch den kleinen Freitag
Motd5: Freitag, endlich Wochenende!
Motd6: Welche Pläne hast du für die Samstagnacht?
motd7: Immer wieder sonntags
---
Hier ist der übliche Seitentext. 

## Unsere wahnsinnig kreative Nachricht des Tages

[motd]

````

## Entwickler

Steffen Schultz. [Support finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

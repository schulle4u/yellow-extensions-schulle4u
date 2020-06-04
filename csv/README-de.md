Csv 0.8.11
==========
CSV-Dateileser.

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/csv.zip). Falls du Safari verwendest, rechtsklicke und wähle 'Verknüpfte Datei laden unter'.
3. Kopiere `csv.zip` in dein `system/extensions`-Verzeichnis.

Zum Deinstallieren lösche einfach die [Erweiterungsdateien](extension.ini).

## Wie man eine CSV-Datei anzeigt

Erstelle eine `[csv]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, mit Ausnahme des ersten Arguments sind alle Angaben optional:

`FileName` = Name der CSV-Datei.   
`Class` = Klasse für die HTML-Tabelle

Diese Erweiterung lädt eine CSV-Datei und gibt sie als HTML-Tabelle aus. Für umfangreiche Datensätze stehen ein Zeilenfilter sowie Spaltensortierung zur Verfügung. Des Weiteren können CSV-Daten mittels eines Code-Blocks in markdown geladen werden. 

Die Javascript-Komponente der Erweiterung verwendet Light-table-filter von [Chris Coyier](https://codepen.io/chriscoyier/pen/tIuBL) sowie die [Sort-table-Klasse von Tyler Uebele](https://github.com/stationer/SortTable) freigegeben unter den bedingungen der MIT-Lizenz. 

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden:

`CsvDir` = Verzeichnis für CSV-Dateien (Standard: `media/downloads/`).  
`CsvDelimiter` = Spaltentrenner (Standard: auto).   
`CsvFirstRowHeader` = Benutze die erste Zeile der CSV-Datei als Spaltenüberschrift (Standard: true).  
`CsvFilter` = Zeigt ein Suchfeld zum Filtern der Tabellenzeilen an (Standard: true).

## Beispiel

Grundsätzliche Verwendung:

    [csv tapes.csv]

Benutzerdefinierte Klasse: 

    [csv tapes.csv MyTapes]

Spaltensortierung einschalten: 

    [csv tapes.csv "MyTapes js-sort-table"]

Verwende einen Markdown-Code-Block zum Anzeigen von CSV-Daten: 

    ``` csv {.js-sort-table}
    Code,English Name,French Name
    AD,Andorra,Andorre
    AE,United Arab Emirates,Emirats arabes unis
    AF,Afghanistan,Afghanistan
    AG,Antigua and Barbuda,Antigua-et-Barbuda
    AI,Anguilla,Anguilla
    AL,Albania,Albanie
    ```


## Entwickler

Steffen Schultz. [Support finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

Csv 0.8.13
==========
CSV-Dateileser.

<p align="center"><img src="csv-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man eine CSV-Datei anzeigt

Erstelle eine `[csv]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, mit Ausnahme des ersten Arguments sind alle Angaben optional:

`FileName` = Name der CSV-Datei.   
`Class` = Klasse für die HTML-Tabelle

Diese Erweiterung lädt eine CSV-Datei und gibt sie als HTML-Tabelle aus. Für umfangreiche Datensätze stehen ein Zeilenfilter sowie Spaltensortierung zur Verfügung. Des Weiteren können CSV-Daten mittels eines Code-Blocks in markdown geladen werden. 

## Beispiele

Grundsätzliche Verwendung:

    [csv tapes.csv]

Benutzerdefinierte Klasse: 

    [csv tapes.csv MyTapes]

Spaltensortierung einschalten: 

    [csv tapes.csv "MyTapes js-sort-table"]

Einen Markdown-Code-Block zum Anzeigen von CSV-Daten benutzen: 

    ``` csv {.js-sort-table}
    Code,English Name,French Name
    AD,Andorra,Andorre
    AE,United Arab Emirates,Emirats arabes unis
    AF,Afghanistan,Afghanistan
    AG,Antigua and Barbuda,Antigua-et-Barbuda
    AI,Anguilla,Anguilla
    AL,Albania,Albanie
    ```

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`CsvDirectory` = Verzeichnis für CSV-Dateien (Standard: `media/downloads/`).  
`CsvDelimiter` = Spaltentrenner (Standard: auto).   
`CsvFirstRowHeader` = Benutze die erste Zeile der CSV-Datei als Spaltenüberschrift (Standard: true).  
`CsvFilter` = Zeigt ein Suchfeld zum Filtern der Tabellenzeilen an (Standard: true).

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/csv.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

Die Javascript-Komponente der Erweiterung verwendet Light-table-filter von [Chris Coyier](https://codepen.io/chriscoyier/pen/tIuBL) sowie die [Sort-table-Klasse von Tyler Uebele](https://github.com/stationer/SortTable) freigegeben unter den bedingungen der MIT-Lizenz. 

## Entwickler

Steffen Schultz. [Hilfe finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

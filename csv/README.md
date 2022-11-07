<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Csv 0.8.16

CSV file parser.

<p align="center"><img src="csv-screenshot.png?raw=true" alt="Screenshot"></p>

## How to display a CSV file

Create a `[csv]` shortcut. 

The following arguments are available, all but the first argument are optional:

`FileName` = Name of the csv file.   
`Class` = HTML table class

This extension loads a CSV file and outputs a HTML table. For large tables you can enable a row filter and column sorting. You can also load CSV data as code block in Markdown. 

## Examples

Basic usage:

    [csv tapes.csv]

Use custom class: 

    [csv tapes.csv MyTapes]

Enable column sorting: 

    [csv tapes.csv "MyTapes js-sort-table"]

Use a Markdown code block to display CSV data: 

    ``` csv {.js-sort-table}
    Code,English Name,French Name
    AD,Andorra,Andorre
    AE,United Arab Emirates,Emirats arabes unis
    AF,Afghanistan,Afghanistan
    AG,Antigua and Barbuda,Antigua-et-Barbuda
    AI,Anguilla,Anguilla
    AL,Albania,Albanie
    ```


## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`CsvDirectory` = Directory for CSV files (default: `media/downloads/`).  
`CsvDelimiter` = Column delimiter (default: auto).   
`CsvFirstRowHeader` = Use first line of CSV file as table header (Default: true).  
`CsvFilter` = Displays a search box to filter table rows (default: true).

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/csv.zip) and copy ZIP file into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

This extension includes [Light-table-filter](https://codepen.io/chriscoyier/pen/tIuBL) by Chris Coyier, and [Sort-table class](https://github.com/stationer/SortTable)  by Tyler Uebele.

## Developer

Steffen Schultz. [Get help](https://datenstrom.se/yellow/help/).

<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Csv 0.8.18

CSV file parser.

<p align="center"><img src="csv-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install an extension

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/csv.zip) and copy ZIP file into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to display a CSV file

Create a `[csv]` shortcut. 

The following arguments are available, all but the first argument are optional:

`FileName` = name of the CSV file  
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

`CsvDirectory` = directory for CSV files  
`CsvDelimiter` = column delimiter, `auto` for automatic detection  
`CsvFirstRowHeader` = use first line of CSV file as table header, 1 or 0  
`CsvFilter` = displays a search box to filter table rows, 1 or 0  

## Acknowledgements

This extension includes [Light-table-filter](https://codepen.io/chriscoyier/pen/tIuBL) by Chris Coyier, and [Sort-table class](https://github.com/stationer/SortTable)  by Tyler Uebele, as well as code contributions by Mark. Thanks for your work!

## Developer

Steffen Schultz. [Get help](https://datenstrom.se/yellow/help/).

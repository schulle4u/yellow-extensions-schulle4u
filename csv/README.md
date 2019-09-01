Csv 0.8.6
=========
CSV file parser.

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/csv.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `csv.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to display a CSV file

Create a `[csv]` shortcut. 

The following arguments are available, all but the first argument are optional:

`File` = Name of the csv file.   
`Delimiter` = The column delimiter for the CSV file (Default: semicolon `;`).   
`Class` = HTML table class

This extension loads a CSV file and outputs a HTML table. For large tables you can enable a row filter and column sorting. 

Javascript component includes Light-table-filter by [Chris Coyier](https://codepen.io/chriscoyier/pen/tIuBL), and [Sort-table class by Tyler Uebele](https://github.com/stationer/SortTable) released under the terms of the MIT license. 

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`CsvDir` = Directory for CSV files (default: `media/downloads/`).  
`CsvDelimiter` = Default column delimiter.   
`CsvFirstRowHeader` = Use first line of CSV file as table header (Default: true).  
`CsvFilter` = Displays a search box to filter table rows (default: true).

## Example

Basic usage:

    [csv tapes.csv]

Use custom delimiter and style: 

    [csv tapes.csv \t MyTapes]

Enable column sorting: 

    [csv tapes.csv , "MyTapes js-sort-table"]

## Developer

Steffen Schultz

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

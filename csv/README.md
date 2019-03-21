Csv 0.8.3
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

This extension loads a CSV file and outputs a HTML table. 

## How to configure the CSV extension

The following settings can be configured in file `system/settings/system.ini`:

`CsvDir` = Directory for CSV files (default: `media/downloads/`).  
`CsvDelimiter` = Default column delimiter.   
`CsvFirstRowHeader` = Use first line of CSV file as table header (Default: true).

## Example

Embedding a CSV file:

    [csv tapes.csv]
    [csv tapes.csv , MyTapes]

## Developer

Steffen Schultz

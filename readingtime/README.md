<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Readingtime 0.8.20

Show estimated reading time for page content.

<p align="center"><img src="readingtime-screenshot.png?raw=true" alt="Screenshot"></p>

## How to show estimated reading time

Create a `[readingtime]` shortcut. The following optional argument is available: 

`WordsPerMinute` = The amount of words per minute to calculate the estimated reading time (default: 250). 

This is a basic inline shortcut to show an estimated reading time for your pages, useful in blog and wiki articles to give your visitors an idea how long it may take to read a text. The actual reading time will vary depending on content and reading speed, therefore you can modify the words per minute calculation to suit your audience. 

## Examples

Basic usage: 

    Estimated reading time: [readingtime] minutes.

Calculate reading time with more words per minute: 

    Estimated reading time: [readingtime 400] minutes.


## Settings

The following setting can be configured in file `system/extensions/yellow-system.ini`:

`ReadingtimeWordsPerMinute` = The amount of words per minute to calculate the estimated reading time (default: 250).

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/readingtime.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Steffen Schultz. [Get help](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

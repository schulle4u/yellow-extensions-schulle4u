Motd 0.8.3
========================
Displays a message of the day.

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/motd.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `motd.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to use the message of the day

In your page metadata, create a message for each day (motd1 to motd7), and put a `[motd]` shortcut where the message should be displayed. 

## Example

Here is an example content file. 

````
---
Title: Page title
motd1: Today is monday
motd2: Tuesday, the week is still way to long
Motd3: Wednesday, theres light on the horizon!
...
motd7: Sunday, lazy sunday
---
Page text goes here as usual. 

## Our totally awesome message of the day

[motd]

````

## Developer
Steffen Schultz

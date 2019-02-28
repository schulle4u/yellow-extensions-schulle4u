Tunein 0.8.3
======================
Embed TuneIn Radio player

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/tunein.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `tunein.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to use the TuneIn radio player

Create a `[tunein]` shortcut.
 
The following arguments are available, all but the first argument are optional:

`ID` = last part after the station name in a [TuneIn](https://www.tunein.com/) link, e.g. `https://tunein.com/radio/Powerradio4u-s305750/`, whereas `s305750` is the station ID in this case.  
`STYLE` = station embed style, e.g. `left`, `center`, `right`  
`WIDTH` = station embed width, pixel or percent  
`HEIGHT` = station embed height, pixel or percent   
`AUTOPLAY` = Enable stream autoplay, true or false (default).  

## Example

Embedding a station. 

    [tunein s305750]
    [tunein s305750 center - - true]

## Developer

Steffen Schultz

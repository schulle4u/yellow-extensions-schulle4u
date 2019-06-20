Tunein 0.8.3
======================
TuneIn-Radio-Player einbetten. 

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/tunein.zip). Falls du Safari verwendest, rechtsklicke und wähle 'Verknüpfte Datei laden unter'.
3. Kopiere `tunein.zip` in dein `system/extensions`-Verzeichnis.

Zum Deinstallieren lösche einfach die [Erweiterungsdateien](extension.ini).

## Wie man den TuneIn-Radio-Player einbettet

Erstelle eine `[tunein]`-Abkürzung.
 
Die folgenden Argumente sind verfügbar, mit Ausnahme des ersten Arguments sind alle Angaben optional:

`ID` = Letzter Teil nach dem Stationsnamen in einem [TuneIn-Link](https://www.tunein.com/), z. B. `https://tunein.com/radio/Powerradio4u-s305750/`, wobei in diesem Fall `s305750` die Stations-ID ist.  
`STYLE` = Player-Stil, z. B. `left`, `center`, `right`  
`WIDTH` = Breite des Players in Pixel oder Prozent  
`HEIGHT` = Höhe des Players in Pixel oder Prozent   
`AUTOPLAY` = Automatisches Abspielen (Standard: `false`).  

## Beispiel

Eine Station einbetten. 

    [tunein s305750]
    [tunein s305750 center - - true]

## Entwickler

Steffen Schultz

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-developers/master/media/images/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-developers/master/media/images/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

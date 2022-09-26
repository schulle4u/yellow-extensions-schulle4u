<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Antispam 0.8.6

Alternative Verschleierung von E-Mail-Adressen. 

<p align="center"><img src="antispam-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man E-Mail-Adressen verschleiert

Erstelle eine `[email]`-Abkürzung.

Die folgenden Argumente sind verfügbar, mit Ausnahme des ersten Arguments sind alle Angaben optional:

`address` = Zu verschleiernde E-Mail-Adresse, z. B. `name@beispiel.de`  
`text` = Ein optionaler Text für den E-Mail-Link, anderenfalls wird die Adresse verwendet. 

Diese Erweiterung ermöglicht einen effektiveren Schutz von E-Mail-Adressen als die in Markdown integrierte Verschleierung. Sie verwendet eine Kombination zweier Techniken zur Verschleierung, nämlich  [ROT13](http://de.wikipedia.org/wiki/ROT13) und Rechts-nach-links-Schreibung mittels CSS. Dies funktioniert mit oder ohne Javascript, in jedem Fall wird jedoch ein CSS-fähiger Browser benötigt. Falls Javascript nicht verfügbar oder ausgeschaltet ist, wird auf eine reine CSS-Methode zur Anzeige der E-Mail-Adresse zurückgegriffen. Text-Browser und Bildschirmleser können dann jedoch die Adresse nicht korrekt anzeigen. 

## Beispiele

Allgemeine Verwendung:

    [email example@example.com]

Linktext anpassen, schließe mehrere Wörter in Anführungszeichen ein: 

    [email example@example.com Kontakt]
    [email example@example.com "Schreibe uns eine E-Mail"]

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/downloads/antispam.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Steffen Schultz. [Hilfe finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

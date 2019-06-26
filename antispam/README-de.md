Antispam 0.8.3
==============
Alternative Verschleierung von E-Mail-Adressen. 

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/antispam.zip). Falls du Safari verwendest, rechtsklicke und wähle 'Verknüpfte Datei laden unter'.
3. Kopiere `antispam.zip` in dein `system/extensions`-Verzeichnis.

Zum Deinstallieren lösche einfach die [Erweiterungsdateien](extension.ini).

## Wie man E-Mail-Adressen verschleiert

Erstelle eine `[email]`-Abkürzung.
 
Die folgenden Argumente sind verfügbar, mit Ausnahme des ersten Arguments sind alle Angaben optional:

`address` = Zu verschleiernde E-Mail-Adresse, z. B. `name@beispiel.de`  
`displaytext` = Ein optionaler Text für den E-Mail-Link, anderenfalls wird die Adresse verwendet. 

Diese Erweiterung ermöglicht einen effektiveren Schutz von E-Mail-Adressen als die in Markdown integrierte Verschleierung. Sie verwendet eine Kombination zweier Techniken zur Verschleierung, nämlich  [ROT13](http://de.wikipedia.org/wiki/ROT13) und Rechts-nach-links-Schreibung mittels CSS. Dies funktioniert mit oder ohne Javascript, in jedem Fall wird jedoch ein CSS-fähiger Browser benötigt. Falls Javascript nicht verfügbar oder ausgeschaltet ist, wird auf eine reine CSS-Methode zur Anzeige der E-Mail-Adresse zurückgegriffen. Text-Browser und Bildschirmleser können dann jedoch die Adresse nicht korrekt anzeigen. 

## Entwickler

Steffen Schultz

[Antispam-Klasse von Roman Ozana (Sphido)](https://github.com/sphido/antispam), verfügbar unter den Bedingungen der BSD-3-Clause-Lizenz. 

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/website/media/images/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/website/media/images/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

Shariff 0.8.4
=============
Datenschutzfreundliche Teilen-Schaltflächen.

![Bildschirmfoto](shariff-screenshot.png?raw=true)

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Fontawesome-Erweiterung herunterladen und installieren](https://github.com/datenstrom/yellow-extensions/tree/master/features/fontawesome).   
3. [Erweiterung herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/shariff.zip). Falls du Safari verwendest, rechtsklicke und wähle 'Verknüpfte Datei laden unter'.
4. Kopiere `shariff.zip` in dein `system/extensions`-Verzeichnis.

Zum Deinstallieren lösche einfach die [Erweiterungsdateien](extension.ini).

## Wie man die Teilen-Schaltflächen verwendet

Die Erweiterung fügt Teilen-Schaltflächen für soziale Netzwerke hinzu, welche die Privatsphäre deiner Besucher schützen. Die Schaltflächen werden auf Blog- und Wiki-Seiten eingeblendet. Um sie auf anderen Seiten anzuzeigen, erstelle eine `[shariff]`-Abkürzung oder  mittels HTML `<div class="shariff"></div>`. Siehe Beispiel unten.

Die Erweiterung benutzt [Shariff v2.1.3](https://github.com/heiseonline/shariff) von Heise, freigegeben unter den Bedingungen der [MIT-Lizenz](https://opensource.org/licenses/MIT).

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden:

`ShariffServices` = Verfügbare Dienste, z. B. `twitter, facebook, info`  

## Beispiel

Für eine grundlegende Verwendung füge folgenden Code in deine Seiten ein: 

`<div class="shariff"></div>`

[Erweiterte Optionen](https://github.com/heiseonline/shariff#options-data-attributes) können mit Data-Attributen konfiguriert werden: 

`<div class="shariff" data-lang="en"></div>`

## Entwickler

Steffen Schultz mit Code von Heise Online

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

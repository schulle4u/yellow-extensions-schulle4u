Spoiler 0.8.7
=============
Bestimmte Seitenelemente verstecken.

## Wie man Seiteninhalte versteckt

Erstelle eine `[spoilerstart]`-Abkürzung, füge die zu versteckenden Inhalte ein und schließe mit einer `[spoilerstop]`-Abkürzung den Spoiler.
 
Die folgenden Argumente sind verfügbar, alle Angaben sind optional:

`ID` = Eine ID für das `<div>`-Element des Spoilers, wird für mehr als einen Spoiler pro Seite benötigt.  
`label` = Eigener Text für den Link zum Ein- und Ausblenden des spoilers, Standard sind Auslassungspunkte. Umschließe mehrere Wörter mit Anführungszeichen.  
`display` = Anzeige-Stil, `block` oder `none`. (Standard:`none`). 

*Hinweis*: Versteckte Elemente werden nicht entfernt, sondern mittels Javascript versteckt. 

## Beispiele

Einen Textblock verstecken. 

```
---
Title: Spoiler-beispiel
---
Unten ist ein Text, der standardmäßig versteckt bleibt. Klicke auf das Symbol zum Einblenden. 

[spoilerstart text1]  

Dieser Text ist standardmäßig ausgeblendet. Falls du ihn jetzt lesen kannst, hast du das richtige Symbol geklickt. Du kannst beliebigen Inhalt einfügen; Text, Links, Bilder, sogar weitere Abkürzungen sind möglich. 

[spoilerstop]

Hier kann weiterer Inhalt stehen. 
```

Dies erlaubt es deinen Besuchern, den Twitter-Feed für eine bessere Leseerfahrung auszublenden: 

```
---
Title: Twitter
---
Hier ist unser Twitter-Feed. Klicke auf den Link zum Ausblenden. 

[spoilerstart twitterfeed "Twitter-Feed zeigen/ausblenden" block]  
[twitter datendesigner]  
[spoilerstop]

Hier ist weiterer Text. 
```

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/spoiler.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Steffen Schultz. [Hilfe finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

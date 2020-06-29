Spoiler 0.8.6
=============
Bestimmte Seitenelemente verstecken.

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/spoiler.zip). Falls du Safari verwendest, rechtsklicke und wähle 'Verknüpfte Datei laden unter'.
3. Kopiere `spoiler.zip` in dein `system/extensions`-Verzeichnis.

Zum Deinstallieren lösche einfach die [Erweiterungsdateien](extension.ini).

## Wie man Seiteninhalte versteckt

Erstelle eine `[spoilerstart]`-Abkürzung, füge die zu versteckenden Inhalte ein und schließe mit einer `[spoilerstop]`-Abkürzung den Spoiler.
 
Die folgenden Argumente sind verfügbar, alle Angaben sind optional:

`ID` = Eine ID für das `<div>`-Element des Spoilers, wird für mehr als einen Spoiler pro Seite benötigt.  
`label` = Eigener Text für den Link zum Ein- und Ausblenden des spoilers, Standard sind Auslassungspunkte. Umschließe mehrere Wörter mit Anführungszeichen.  
`display` = Anzeige-Stil, `block` oder `none`. (Standard:`none`). 

*Hinweis*: Versteckte Elemente werden nicht entfernt, sondern mittels Javascript versteckt. 

## Beispiel

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

## Entwickler

Steffen Schultz. [Support finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

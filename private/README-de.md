Private 0.8.3
=======================
Erstelle passwortgeschützte Seiten.

<p align="center"><img src="private-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/private.zip). Falls du Safari verwendest, rechtsklicke und wähle 'Verknüpfte Datei laden unter'.
3. Kopiere `private.zip` in dein `system/extensions`-Verzeichnis.

Zum Deinstallieren lösche einfach die [Erweiterungsdateien](extension.ini).

## Wie man geschützte Seiten erstellt

Setze `status: private` und `password: Dein Passwort` in deinen Seiteneinstellungen. 

**Hinweis**: Bitte verwende diese Erweiterung mit Vorsicht. Sie verschlüsselt keine Daten oder verhindert, dass die Seiten von anderen Erweiterungen ausgelesen werden können. Den Seiten wird lediglich eine einfache Passwortabfrage hinzugefügt. Mittels weiterer Einstellungen kannst du Datenlecks minimieren, siehe hierzu das Beispiel unten. 

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden:

`PrivateVisible` = Zeige private Seiten in der Navigation und in Suchergebnissen (Standard: 0)  

## Beispiel

Hier ist eine Beispielseite: 

```
---
Title: Geschützte Seite
Description: Diese Seite ist geschützt. Bitte gib das korrekte Passwort ein, um auf den inhalt zuzugreifen.
Status: private
Password: protected
---
Dies ist eine geschützte Seite. [--more--]

Ein Seitenumbruch wird verwendet, damit Erweiterungen zur Seitenauflistung keine der geschützten Informationen preisgeben können. Die `Description`-Einstellung entfernt ungewollte Informationen aus den Metadaten und kann verwendet werden, um für Besucher eine Meldung anzuzeigen. 
```

## Entwickler

Steffen Schultz

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

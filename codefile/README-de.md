<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Codefile 0.8.22

Code-Blöcke als Textdatei herunterladen.

<p align="center"><img src="codefile-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man einen Code-Block herunterlädt

Verwende Spezial-Attribute, um den gewünschten Code-Block mit einer ID zu versehen, und erstelle eine `[codefile]`-Abkürzung.

Die folgenden Argumente sind verfügbar, alle Argumente sind optional: 

`Id` = ID des Code-Blocks, z. B. `codefile`  
`FileName` = Dateiname des heruntergeladenen Code-Blocks  

Diese Erweiterung erlaubt das Herunterladen von Code-Blöcken als Textdatei, um etwa fertige Code-Beispiele anzubieten, die sofort einsatzfähig sind. Bitte verwende hierfür die eingerahmten Code-Blöcke, eingerückter Code oder Code zwischen Akzentzeichen wird nicht unterstützt. 

## Beispiele

Inhaltsdatei mit herunterladbarem Code-Block:

    ---
    Title: Beispiel
    ----
    Dies ist eine Beispielseite. 
    
    ``` {#codefile contenteditable=true}
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
    tempor incididunt ut labore et dolore magna pizza. Ut enim ad minim veniam, 
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. 
    ```

    [codefile]

Verwende eine benutzerdefinierte ID und Dateinamen:

    [codefile code-example]
    [codefile code-example example.php]

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/codefile.zip) und die ZIP-Datei in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Danksagung

Die Javascript-Komponente basiert auf einem Tutorial von [GeeksForGeeks](https://www.geeksforgeeks.org/how-to-trigger-a-file-download-when-clicking-an-html-button-or-javascript/). Vielen Dank für den Code!

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

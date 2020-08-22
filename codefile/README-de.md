Codefile 0.8.15
===============
Code-Blöcke als Textdatei herunterladen.

## Wie man einen Code-Block herunterlädt

Verwende Spezial-Attribute, um den gewünschten Code-Block mit einer ID zu versehen, und erstelle eine `[codefile]`-Abkürzung.

Das folgende optionale Argument ist verfügbar: 

`Id` = ID des Code-Blocks (Standard: `codefile`).  

Diese Erweiterung erlaubt das Herunterladen von Code-Blöcken als Textdatei, um etwa fertige Code-Beispiele anzubieten, die sofort einsatzfähig sind. Bitte verwende hierfür die eingerahmten Code-Blöcke, eingerückter Code oder Code zwischen Akzentzeichen wird nicht unterstützt. Die Javascript-Komponente basiert auf einem Tutorial von [GeeksForGeeks](https://www.geeksforgeeks.org/how-to-trigger-a-file-download-when-clicking-an-html-button-or-javascript/). 

## Beispiele

Hier ist eine Seite mit herunterladbarem Code-Block.

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


## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/codefile.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Steffen Schultz. [Hilfe finden](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).


<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
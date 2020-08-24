Codefile 0.8.16
===============
Download code blocks as text file.

## How to download a code block

Use special markdown attributes to Prepare your code block with an ID and create a `[codefile]` shortcut. 

The following arguments are available, all arguments are optional:
 
`Id` = Id of the code block (default: `codefile`).  
`Filename` = Filename of the saved code block (default: `id-download.txt`).  

This extension can be used to download code blocks as text file, useful to provide a file download for ready-to-use code examples. Please use fenced code blocks from MarkdownExtra, indented blocks and code between backticks are not supported. The Javascript component is based on a tutorial from [GeeksForGeeks](https://www.geeksforgeeks.org/how-to-trigger-a-file-download-when-clicking-an-html-button-or-javascript/). 

## Examples

Here is a page with downloadable code block.

    ---
    Title: Example
    ----
    This is an example page. 
    
    ``` {#codefile contenteditable=true}
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
    tempor incididunt ut labore et dolore magna pizza. Ut enim ad minim veniam, 
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. 
    ```

    [codefile]


## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/codefile.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Steffen Schultz. [Get help](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
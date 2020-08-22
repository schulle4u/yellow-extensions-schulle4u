Codefile 0.8.15
===============
Download code blocks as text file.

## How to download a code block

Use special markdown attributes to Prepare your code block with an ID and create a `[codefile]` shortcut. 

The following optional argument is available:
 
`Id` = Id of the code block (default: `codefile`).  

This extension can be used to download code blocks as text file, useful to provide a file download for ready-to-use code examples. The Javascript component is based on a tutorial from [GeeksForGeeks](https://www.geeksforgeeks.org/how-to-trigger-a-file-download-when-clicking-an-html-button-or-javascript/). 

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

    [codefile codefile]


## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/codefile.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Steffen Schultz. [Get help](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

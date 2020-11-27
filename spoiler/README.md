Spoiler 0.8.7
=============
Hide certain page elements.

<p align="center"><img src="spoiler-screenshot.png?raw=true" alt="Screenshot"></p>

## How to hide page elements

Create a `[spoilerstart]` shortcut, write down what should be hidden and use the `[spoilerstop]` shortcut to close the spoiler.
 
The following arguments are available, all arguments are optional:

`ID` = an ID for the `<div>` element which includes the spoiler, required for more than one spoiler on the same page.  
`label` = Custom text for the show/hide link, default is a horizontal ellipsis. Put text in quotes for more than one word.  
`display` = display type, "block" or "none". Default is "none". 

*Note*: Hidden elements are not removed, they are just made invisible until the visitor clicks the link to show them. 

## Examples

Hiding a block of text. 

```
---
Title: Spoiler example
---
Click on the symbol to show the hidden text. 

[spoilerstart text1]  

This text is hidden by default. If you can read this, you successfully clicked the right symbol. You can put whatever you like here; text, links, images, even extension shortcuts are possible. 

[spoilerstop]

More text is here. 
```

Or if you want to give your visitors the possibility to hide your twitter feed for a less cluttered reading experience: 

```
---
Title: Twitter
---
This is our twitter feed. Click on the link to hide it. 

[spoilerstart twitterfeed "Show or hide Twitter feed" block]  
[twitter datendesigner]  
[spoilerstop]

Here is some more text. 
```

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/spoiler.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Steffen Schultz. [Get help](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

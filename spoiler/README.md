Spoiler 0.8.4
=============
Hide certain page elements.

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/spoiler.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `spoiler.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to hide page elements

Create a `[spoilerstart]` shortcut, write down what should be hidden and use the `[spoilerstop]` shortcut to close the spoiler.
 
The following arguments are available, all arguments are optional:

`ID` = an ID for the `<div>` element which includes the spoiler, required for more than one spoiler on the same page.  
`label` = Custom text for the show/hide link, default is a horizontal ellipsis. Put text in quotes for more than one word.  
`display` = display type, "block" or "none". Default is "none". 

*Note*: Hidden elements are not removed, they are just made invisible until the visitor clicks the link to show them. 

## Example

Hiding a block of text. 

```
---
Title: Spoiler example
---
Below is some text which is hidden by default. Click on the symbol to show the content. 

[spoilerstart text1]  

This text is hidden by default. If you can read this, you successfully clicked the right symbol. You can put whatever you like here; text, links, images, even extension shortcuts are possible. 

[spoilerstop text1]

More text is here. 
```

Or if you want to give your visitors the possibility to hide your twitter feed for a less cluttered reading experience: 

```
---
Title: Twitter
---
This is our twitter feed. Klick on the link to hide it. 

[spoilerstart twitterfeed "Show or hide Twitter feed" block]  
[twitter datenstromse]  
[spoilerstop twitterfeed]

Here is some more text. 
```

Please remember to always provide the right element ID also in the spoilerstop shortcut. 

## Developer

Steffen Schultz

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>

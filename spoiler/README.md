<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Spoiler 0.8.8

Hide certain page elements.

<p align="center"><img src="spoiler-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install an extension

[Download ZIP file](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/spoiler.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to hide page elements

Create a `[spoilerstart]` shortcut, write down what should be hidden and use the `[spoilerstop]` shortcut to close the spoiler.
 
The following arguments are available, all arguments are optional:

`Id` = ID fo the spoiler, required for more than one spoiler on the same page  
`Label` = custom text for the show/hide link, put text in quotes for more than one word  
`Display` = display type, `block` or `none`  

Hidden elements are not removed, they are just made invisible until the visitor clicks the link to show them. 

## Examples

Content file with hidden block of text:

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

Content file with twitter feed, hiding on click:

```
---
Title: Twitter
---
This is our twitter feed. Click on the link to hide it. 

[spoilerstart twitterfeed "Show or hide Twitter feed" block]  
[twitter schulle4u]  
[spoilerstop]

Here is some more text. 
```

## Acknowledgements

Thanks to the Datenstrom Yellow community for help and feedback!

## Developer

Steffen Schultz. [Get help](https://datenstrom.se/yellow/help/).

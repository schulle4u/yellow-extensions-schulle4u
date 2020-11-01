Redirect 0.8.3
==============
Alternative page redirection.

<p align="center"><img src="redirect-screenshot.png?raw=true" alt="Screenshot"></p>

## How to redirect to another location

Use the following page settings to redirect your visitors:

`RedirectLocation` = target page or URL (example: `https://datenstrom.se`)  
`RedirectTime` = How many seconds to wait before redirecting (default: 5).

To optionally show a countdown for visitors, create a `[redirect]` shortcut. 

This extension provides an alternative page redirection method using meta refresh. Unlike Yellow's builtin redirection feature, this extension allows  you to inform your visitors where they are going to be redirected. 

## Examples

Here is an example content file with location redirection: 

```
---
Title: Redirecting...
RedirectLocation: https://datenstrom.se
RedirectTime: 10
---
Redirecting in [redirect] seconds. If you are not being redirected automatically, [click here to go to the page](https://datenstrom.se).
```

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`RedirectTime` = How many seconds to wait before redirecting (default: 5).

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/redirect.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Steffen Schultz. [Get help](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>


<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Redirect 0.8.3

Alternative page redirection.

<p align="center"><img src="redirect-screenshot.png?raw=true" alt="Screenshot"></p>

## How to redirect to another location

Use the following page settings to redirect your visitors:

`RedirectLocation` = target page or URL (example: `https://datenstrom.se`)  
`RedirectTime` = How many seconds to wait before redirecting (default: 5).

To optionally show a countdown for visitors, create a `[redirect]` shortcut. 

This extension provides an alternative page redirection method using meta refresh. Unlike Datenstrom Yellow's [builtin redirection](https://github.com/annaesvensson/yellow-core), this extension allows you to inform your visitors where they are going to be redirected. 

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

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/main/downloads/redirect.zip) and copy ZIP file into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## Developer

Steffen Schultz. [Get help](https://datenstrom.se/yellow/help/).

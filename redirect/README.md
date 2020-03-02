Redirect 0.8.2
==============
Alternative page redirection.

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/redirect.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `redirect.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to redirect to another location

Use the following page settings to redirect your visitors:

`RedirectLocation` = target page or URL (example: `https://datenstrom.se`)  
`RedirectTime` = How many seconds to wait before redirecting (default: 5).

To optionally show a countdown for visitors, create a `[redirect]` shortcut. 

This extension provides an alternative page redirection method using meta refresh. Unlike Yellow's builtin redirection feature, this extension allows  you to inform your visitors where they are going to be redirected. 

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`RedirectTime` = How many seconds to wait before redirecting (default: 5).

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

## Developer

Steffen Schultz. [Get support](https://github.com/schulle4u/yellow-extensions-schulle4u/issues).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>


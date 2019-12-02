Refresh 0.8.1
=============
Redirect to another URL using meta refresh.

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/schulle4u/yellow-extensions-schulle4u/raw/master/zip/refresh.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `refresh.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to redirect to another URL

Use the following page settings to redirect your visitors:

`Refresh` = target URL (example: `https://datenstrom.se`)  
`RefreshTime` = How many seconds to wait before redirecting (default: 5).

To optionally show a countdown for visitors, create a `[refresh]` shortcut. 

This extension provides an alternative page redirection using a meta refresh. Yellow already has a `Redirect` page setting, but this only allows immediate redirection. Using this extension you can inform your visitors where they are going to be redirected. 

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`RefreshTime` = How many seconds to wait before redirecting (default: 5).

## Examples

Here is an example content file with page redirection: 

```
---
Title: Redirecting...
Refresh: https://datenstrom.se
RefreshTime: 10
---
Redirecting in [refresh] seconds. If you are not being redirected automatically, [click here to go to the page](https://datenstrom.se).
```

## Developer

Steffen Schultz

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>


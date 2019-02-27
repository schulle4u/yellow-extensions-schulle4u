Socialtags extension 0.8.3
==========================
Adds Twitter and Open Graph meta tags.

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/schulle4u/yellow-plugins-schulle4u/raw/master/zip/socialtags.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `socialtags.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to use social meta tags

The extension uses data from your page settings and converts them to appropriate meta tags for [Twitter cards](https://developer.twitter.com/en/docs/tweets/optimize-with-cards/overview/abouts-cards) as well as for the [Open Graph protocol](http://ogp.me/) which is used by Facebook. 

*Note*: For correct page validation the Open Graph protocol requires some additional namespace elements in the opening `<html` element. Replace the first line of your `system/layouts/header.html` with the following line: 

    <!DOCTYPE html><html <?php if ($yellow->extensions->isExisting("socialtags")): ?>prefix="og: http://ogp.me/ns# <?php if ($yellow->page->getHtml("layout") == "blog"): ?>article: http://ogp.me/ns/article#<?php endif ?>" <?php endif ?>lang="<?php echo $yellow->page->getHtml("language") ?>">


## How to configure socialtags

The following settings can be configured in file `system/settings/system.ini`:

`SocialtagsTwitterUser` = Your site's Twitter `@username`, mandatory for Twitter cards display. 

The following settings can be configured in your `page.txt`: 

`SocialtagsTwitterUser` = an optional Twitter `@username` for individual pages, e.g. as author for blog articles. Will be displayed as `twitter:creator` in the Twitter card.  
`SocialtagsImage` = URL to an image file used for social media. Use this to avoid fetching wrong images by social media sites.  
`SocialtagsImageAlt` = a short description for your social media image, helps users with disabilities. 

## Developer

Steffen Schultz

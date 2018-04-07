# searchExcerpt module for Craft CMS 3.x

Display only the part of a text which contains a given searchterm and highlights it.

![Screenshot](resources/screenshots/plugin_logo.png)

## Installation

To install the module, follow these instructions.

First, you'll need to add the contents of the `app.php` file to your `config/app.php` (or just copy it there if it does not exist). This ensures that your module will get loaded for each request. The file might look something like this:
```
return [
    'modules' => [
        'search-excerpt-module' => [
            'class' => \modules\searchexcerptmodule\SearchExcerptModule::class,
        ],
    ],
    'bootstrap' => ['search-excerpt-module'],
];
```
You'll also need to make sure that you add the following to your project's `composer.json` file so that Composer can find your module:

    "autoload": {
        "psr-4": {
          "modules\\searchexcerptmodule\\": "modules/searchexcerptmodule/src/"
        }
    },

After you have added this, you will need to do:

    composer dump-autoload
 
 …from the project’s root directory, to rebuild the Composer autoload map. This will happen automatically any time you do a `composer install` or `composer update` as well.

## searchExcerpt Overview

Finds a given searchterm in a text and higlights it.

## Using searchExcerpt

{{ searchExcerpt(text, searchterm[[, padding][, class]]) }}

where text ist the initial text
searchterm is the term which should be higlighted
padding is the (optional) amount of characters which are added to the left an right of the highlighted term
class ist the (optional) css class of the <span> which enclosed the term
	
e.g.

It’s true, this site doesn’t have a whole lot of content yet, but don’t worry. Our web developers have just installed the CMS, and they’re setting things up for the content editors this very moment. Soon Test.albatros-golf-berlin.de will be an oasis of fresh perspectives, sharp analyses, and astute opinions that will keep you coming back again and again.

{{ searchExcerpt.from(entry.body, 'of', 20) }} equals

… have a whole lot **of** content yet, but …


Brought to you by [Jörg Gudehus](http://joerggudehus.de)

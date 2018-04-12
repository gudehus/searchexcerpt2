# searchExcerpt module for Craft CMS 3.x

Display only the part of a text which contains a given searchterm and highlights it.

![Screenshot](resources/screenshots/plugin_logo.png)

## Installation

To install the plugin, follow these instructions.

You have to create the folder where you want to include your plugins by yourself. There are no requirements how you name it. Let's say you want to create the folder plugins in your Craft folder, then you have to include the plugin in your composer.json like this

"require": {
   "php": ">=7.0.0",
   ....
   "namespace/pluginhandle": "your version",
   "secondred/form-builder": "^1.0" (<--- example how it could look like)
},
"repositories": [
{
  "type": "path",
  "url": "plugins/yourPluginFolderName"
},
{
  "type": "path",   
  "url": "plugins/form-builder" (<--- example how it could look like)
},
....
Then you'll need access to your server via ssh and do composer update


## searchExcerpt Overview

Finds a given searchterm in a text and highlights it. The text is shortened to 20 (changeable) characters before and after the highlight. If text is truncated an ellipsis (…) is added. 

## Using searchExcerpt

You can use searchExcerpt as a function

{{ searchExcerpt(text, searchterm[[, padding][, class]]) }}

or as a Twig filter

{{ text|searchExcerpt(searchterm[[, padding][, class]]) }}

where text ist the initial text

searchterm is the term which should be higlighted

padding is the (optional) amount of characters which are added to the left an right of the highlighted term

class ist the (optional) css class of the <span> which enclosed the term
	
e.g. entry.body =

It’s true, this site doesn’t have a whole lot of content yet, but don’t worry. Our web developers have just installed the CMS, and they’re setting things up for the content editors this very moment. Soon Test.albatros-golf-berlin.de will be an oasis of fresh perspectives, sharp analyses, and astute opinions that will keep you coming back again and again.

{{ searchExcerpt.from(entry.body, 'of', 20) }} equals

… have a whole lot **of** content yet, but …


Brought to you by [Jörg Gudehus](http://joerggudehus.de)

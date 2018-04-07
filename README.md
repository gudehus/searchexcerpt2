# searchExcerpt plugin for Craft CMS

Display only the part of a text which contains a given searchterm

![Screenshot](resources/screenshots/plugin_logo.png)

## Installation

To install searchExcerpt, follow these steps:

1. Download & unzip the file and place the `searchexcerpt` directory into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/gudehus/searchexcerpt.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3.  -OR- install with Composer via `composer require gudehus/searchexcerpt`
4. Install plugin in the Craft Control Panel under Settings > Plugins
5. The plugin folder should be named `searchexcerpt` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

searchExcerpt works on Craft 2.4.x and Craft 2.5.x.

## searchExcerpt Overview

Finds a given searchterm in a text and higlights it.

## Using searchExcerpt

{{ craft.searchExcerpt.from(text, searchterm[[, padding][, class]]) }}

where text ist the initial text
searchterm is the term which should be higlighted
padding is the (optional) amount of characters which are added to the left an right of the highlighted term
class ist the (optional) css class of the <span> which enclosed the term
	
e.g.

It’s true, this site doesn’t have a whole lot of content yet, but don’t worry. Our web developers have just installed the CMS, and they’re setting things up for the content editors this very moment. Soon Test.albatros-golf-berlin.de will be an oasis of fresh perspectives, sharp analyses, and astute opinions that will keep you coming back again and again.

{{ craft.searchExcerpt.from(entry.body, 'of', 20) }} equals

… have a whole lot of content yet, but …

## searchExcerpt Roadmap

Some things to do, and ideas for potential features:

* Release it

Brought to you by [Jörg Gudehus](http://joerggudehus.de)

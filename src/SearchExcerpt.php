<?php
/**
 * SearchExcerpt plugin for Craft CMS 3.x
 *
 * Finds a given searchterm in a text and higlights it.
 *
 * @link      http://joerggudehus.de
 * @copyright Copyright (c) 2018 Jörg Gudehus
 */

namespace gudehus\searchexcerpt;

use gudehus\searchexcerpt\twigextensions\SearchExcerptTwigExtension;

use Craft;
use craft\base\Plugin;

/**
 * Craft plugins are very much like little applications in and of themselves. We’ve made
 * it as simple as we can, but the training wheels are off. A little prior knowledge is
 * going to be required to write a plugin.
 *
 * For the purposes of the plugin docs, we’re going to assume that you know PHP and SQL,
 * as well as some semi-advanced concepts like object-oriented programming and PHP namespaces.
 *
 * https://craftcms.com/docs/plugins/introduction
 *
 * @author    Jörg Gudehus
 * @package   SearchExcerpt
 * @since     1.2
 *
 */
class SearchExcerpt extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * Static property that is an instance of this plugin class so that it can be accessed via
     * SearchExcerpt::$plugin
     *
     * @var SearchExcerpt
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * To execute your plugin’s migrations, you’ll need to increase its schema version.
     *
     * @var string
     */
    public $schemaVersion = '1.2';

    // Public Methods
    // =========================================================================

    /**
     * Set our $plugin static property to this class so that it can be accessed via
     * SearchExcerpt::$plugin
     *
     * Called after the plugin class is instantiated; do any one-time initialization
     * here such as hooks and events.
     *
     * If you have a '/vendor/autoload.php' file, it will be loaded for you automatically;
     * you do not need to load it in your init() method.
     *
     */
	
	public function init()
    {
        parent::init();
        self::$plugin = $this;
        // Add in our Twig extension
        Craft::$app->view->registerTwigExtension(new SearchExcerptTwigExtension());

	}

    // Protected Methods
    // =========================================================================

}

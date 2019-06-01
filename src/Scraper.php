<?php
namespace topshelfcraft\scraper;

use Craft;
use craft\base\Plugin as BasePlugin;
use craft\web\twig\variables\CraftVariable;
use topshelfcraft\scraper\services\Scraper as ScraperService;
use topshelfcraft\scraper\twigextensions\ScraperTwigExtension;
use topshelfcraft\ranger\Plugin;
use yii\base\Event;

/**
 * @author Michael Rog <michael@michaelrog.com>
 * @package Scraper
 * @since 3.0.0
 *
 * @property ScraperService $scraper
 */
class Scraper extends BasePlugin
{

	/**
	 * @var Scraper $plugin
	 */
	public static $plugin;

	/**
	 * Initializes the plugin.
	 */
	public function init()
	{

		parent::init();
		self::$plugin = $this;
		Plugin::watch($this);

		// For folks coming from Craft 2.x, we'll provide our methods under a `{{ craft.scraper }}` variable.
		Event::on(
			CraftVariable::class,
			CraftVariable::EVENT_INIT,
			function (Event $event) {
				/** @var CraftVariable $variable **/
				$variable = $event->sender;
				$variable->set('scraper', Scraper::$plugin->scraper);
			}
		);

		// Then, starting in Craft 3.x, we also provide a `{{ scraper }}` global variable.
		Craft::$app->getView()->registerTwigExtension(new ScraperTwigExtension());

	}

}

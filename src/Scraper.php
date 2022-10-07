<?php
namespace TopShelfCraft\Scraper;

use Craft;
use TopShelfCraft\base\Plugin;
use craft\web\twig\variables\CraftVariable;
use TopShelfCraft\Scraper\services\Scraper as ScraperService;
use TopShelfCraft\Scraper\view\TwigExtension;
use yii\base\Event;

/**
 * @author Michael Rog <michael@michaelrog.com>
 * @link https://topshelfcraft.com
 * @copyright Copyright 2022, Top Shelf Craft (Michael Rog)
 *
 * @property ScraperService $scraper
 */
class Scraper extends Plugin
{

	public ?string $changelogUrl = "https://raw.githubusercontent.com/TopShelfCraft/Scraper/master/CHANGELOG.md";
	public bool $hasCpSection = false;
	public bool $hasCpSettings = false;
	public string $schemaVersion = "0.0.0.0";

	public function init()
	{

		$this->setComponents([
			'scraper' => ScraperService::class,
		]);

		parent::init();

		// For folks coming from Craft 2.x, we'll provide our methods under a `{{ craft.scraper }}` variable.
		Event::on(
			CraftVariable::class,
			CraftVariable::EVENT_INIT,
			function (Event $event) {
				/** @var CraftVariable $variable **/
				$variable = $event->sender;
				$variable->set('scraper', Scraper::getInstance()->scraper);
			}
		);

		// Then, starting in Craft 3.x, we also provide a `{{ scraper }}` global variable.
		Craft::$app->getView()->registerTwigExtension(new TwigExtension());

	}

}

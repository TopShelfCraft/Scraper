<?php
namespace Craft;

/**
 * Scraper_BetaService
 *
 * @author    Top Shelf Craft <support@topshelfcraft.com>
 * @copyright Copyright (c) 2016, Michael Rog
 * @license   http://topshelfcraft.com/license
 * @see       http://topshelfcraft.com
 * @package   craft.plugins.scraper
 * @since     1.0
 */
class Scraper_BetaService extends BaseApplicationComponent
{

	const SecondStarToTheRight = 'https://topshelfcraft.com/et/scraper.php';
	const ReleaseFeedUrl = 'https://topshelfcraft.com/releases/Scraper.json';

	public function phoneHome() {

		$et = new Et(static::SecondStarToTheRight);
		$et->phoneHome();

	}

}
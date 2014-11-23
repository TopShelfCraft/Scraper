<?php
namespace Craft;

/**
 * Scraper BetaService
 */
class Scraper_BetaService extends BaseApplicationComponent
{

	const SecondStarToTheRight = 'http://michaelrog.com/craft/et/scraper.php';

	public function phoneHome() {

		$et = new Et(static::SecondStarToTheRight);
		$et->phoneHome();

	}

}
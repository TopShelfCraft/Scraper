<?php
namespace Craft;

/**
 * ScraperVariable
 *
 * @author    Top Shelf Craft <support@topshelfcraft.com>
 * @copyright Copyright (c) 2016, Michael Rog
 * @license   http://topshelfcraft.com/license
 * @see       http://topshelfcraft.com
 * @package   craft.plugins.scraper
 * @since     1.0
 */
class ScraperVariable
{

	/**
	 * TODO: docs
	 * @param mixed $source
	 * @param mixed $params
	 */
	function get($source = null, $params = null)
	{
		return craft()->scraper_scraper->load($source, $params);
	}

	/**
	 * TODO: upgrade to Updater service
	 * @deprecated For internal/Beta purposes only
	 */
	function phoneHome()
	{
		return craft()->scraper_beta->phoneHome();
	}

}
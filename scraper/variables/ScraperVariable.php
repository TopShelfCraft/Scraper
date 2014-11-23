<?php
namespace Craft;

// TODO: Add proper file header
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
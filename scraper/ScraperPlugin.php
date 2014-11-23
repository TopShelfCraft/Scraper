<?php
namespace Craft;

/**
 * Scraper plugin class
 */
class ScraperPlugin extends BasePlugin
{

	public function getName()
	{
		return 'Scraper';
	}

	public function getVersion()
	{
		return '0.1.0';
	}

	public function getDeveloper()
	{
		return 'Michael Rog';
	}

	public function getDeveloperUrl()
	{
		return 'http://michaelrog.com/craft/scraper';
	}

	public function hasCpSection()
	{
		return false;
	}

	public function registerCpRoutes()
	{
		return array();
	}

	public function onAfterInstall()
	{
		craft()->scraper_beta->phoneHome();
	}

}
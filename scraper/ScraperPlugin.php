<?php
namespace Craft;

/**
 * ScraperPlugin
 *
 * @author    Top Shelf Craft <support@topshelfcraft.com>
 * @copyright Copyright (c) 2016, Michael Rog
 * @license   http://topshelfcraft.com/license
 * @see       http://topshelfcraft.com
 * @package   craft.plugins.scraper
 * @since     1.0
 */
class ScraperPlugin extends BasePlugin
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Scraper';
	}

	/**
	 * Return the plugin description
	 *
	 * @return string
	 */
	public function getDescription()
	{
		return 'Easily fetch, parse, and rejigger HTML from anywhere.';
	}

	/**
	 * Return the plugin developer's name
	 *
	 * @return string
	 */
	public function getDeveloper()
	{
		return 'Top Shelf Craft';
	}

	/**
	 * Return the plugin developer's URL
	 *
	 * @return string
	 */
	public function getDeveloperUrl()
	{
		return 'http://topshelfcraft.com';
	}

	/**
	 * Return the plugin's Documentation URL
	 *
	 * @return string
	 */
	public function getDocumentationUrl()
	{
		return 'http://topshelfcraft.com/scraper';
	}

	/**
	 * Return the plugin's current version
	 *
	 * @return string
	 */
	public function getVersion()
	{
		return '0.2.0';
	}

	/**
	 * Return the plugin's db schema version
	 *
	 * @return string|null
	 */
	public function getSchemaVersion()
	{
		return '0.0.0.0';
	}

	/**
	 * Return the plugin's Release Feed URL
	 *
	 * @return string
	 */
	public function getReleaseFeedUrl()
	{
		return Scraper_BetaService::ReleaseFeedUrl;
	}

	/**
	 * Return whether the plugin has a CP section
	 *
	 * @return bool
	 */
	public function hasCpSection()
	{
		return false;
	}

	/**
	 *
	 */
	public function onAfterInstall()
	{
		craft()->scraper_beta->phoneHome();
	}

	/**
	 * Make sure requirements are met before installation.
	 *
	 * @return bool
	 * @throws Exception
	 */
	public function onBeforeInstall()
	{

		// Prevent the install if we aren't at least on Craft 2.5

		if (version_compare(craft()->getVersion(), '2.5', '<')) {
			/*
			 * No way to gracefully handle this
			 * (because until 2.5, plugins can't prevent themselves from being installed),
			 * so throw an Exception.
			 */
			throw new Exception('Hue requires Craft 2.5+');
		}

		// Prevent the install if we aren't at least on PHP 5.4

		if (!defined('PHP_VERSION') || version_compare(PHP_VERSION, '5.4', '<')) {
			Craft::log('Hue requires PHP 5.4+', LogLevel::Error);
			return false;
		}

		// Otherwise we're all good

		return true;

	}

}
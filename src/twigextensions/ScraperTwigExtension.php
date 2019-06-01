<?php
namespace topshelfcraft\scraper\twigextensions;

use topshelfcraft\scraper\Scraper;

/**
 * @author Michael Rog <michael@michaelrog.com>
 * @package Scraper
 * @since 3.0.0
 */
class ScraperTwigExtension extends \Twig_Extension implements \Twig_Extension_GlobalsInterface
{

	/*
	 * Public methods
	 * ===========================================================================
	 */

	/**
	 * Returns the name of the extension.
	 *
	 * @return string The extension name
	 */
	public function getName()
	{
		return 'Scraper';
	}

	/**
	 * @inheritdoc
	 */
	public function getGlobals()
	{
		return ['scraper' => Scraper::$plugin->scraper];
	}

}

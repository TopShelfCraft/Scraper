<?php
namespace Craft;

/**
 * ==============================================
 * Simplehtmldom library, created by S. C. Chen
 * ==============================================
 *
 * @author S. C. Chen
 * @see http://simplehtmldom.sourceforge.net/
 *
 */
require_once CRAFT_PLUGINS_PATH . 'scraper/vendor/simplehtmldom/simple_html_dom.php';

/**
 * Scraper ScraperService
 */
class Scraper_ScraperService extends BaseApplicationComponent
{

	/**
	 * Returns an Scraper object set up with the supplied source and parameters
	 *
	 * @param mixed $source
	 * @param mixed $params
	 *
	 * @return simple_html_dom|false
	 */
	public function load($source = null, $params = null) {

		return file_get_html($source);

	}

}
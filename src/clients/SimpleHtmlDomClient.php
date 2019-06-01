<?php
namespace topshelfcraft\scraper\clients;

use topshelfcraft\scraper\lib\SimpleHtmlDom\simple_html_dom;
use topshelfcraft\scraper\lib\SimpleHtmlDom;

/**
 * @author Michael Rog <michael@michaelrog.com>
 * @package Scraper
 * @since 3.0.0
 */
class SimpleHtmlDomClient extends BaseClient
{

	/**
	 * @param $url
	 *
	 * @return simple_html_dom The SimpleHTMLDom crawler, with the remote source loaded
	 */
	public function get($url)
	{
		$contents = $this->getGuzzleClient()->get($url)->getBody()->getContents();
		return SimpleHtmlDom::str_get_html($contents);
	}

}

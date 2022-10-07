<?php
namespace TopShelfCraft\Scraper\clients;

use TopShelfCraft\Scraper\lib\SimpleHtmlDom\simple_html_dom;
use TopShelfCraft\Scraper\lib\SimpleHtmlDom\SimpleHtmlDom;

/**
 * @deprecated
 */
class SimpleHtmlDomClient extends BaseClient
{

	/**
	 * @return simple_html_dom The SimpleHTMLDom crawler, with the remote source loaded
	 */
	public function get(string $url): simple_html_dom
	{
		$contents = $this->getGuzzleClient()->get($url)->getBody()->getContents();
		return SimpleHtmlDom::str_get_html($contents);
	}

}

<?php
namespace TopShelfCraft\Scraper\clients;

use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class GoutteClient extends BaseClient
{

	/**
	 * @return Crawler The BrowserKit crawler, with the remote source loaded.
	 */
	public function get(string $url): Crawler
	{
		$goutte = new Client();
		return $goutte->request('GET', $url);
	}

}

<?php
namespace topshelfcraft\scraper\clients;

use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

/**
 * @author Michael Rog <michael@michaelrog.com>
 * @package Scraper
 * @since 3.0.0
 */
class GoutteClient extends BaseClient
{

	/**
	 * @param $url
	 *
	 * @return Crawler The BrowserKit crawler, with the remote source loaded
	 */
	public function get($url)
	{
		$goutte = new Client();
		$goutte->setClient($this->getGuzzleClient());
		return $goutte->request('GET', $url);
	}

}

<?php
namespace topshelfcraft\scraper\services;

use topshelfcraft\scraper\clients\BaseClient;
use topshelfcraft\scraper\clients\GoutteClient;
use topshelfcraft\scraper\clients\SimpleHtmlDomClient;
use yii\base\Component;
use yii\base\InvalidConfigException;

/**
 * @author Michael Rog <michael@michaelrog.com>
 * @package Scraper
 * @since 3.0.0
 */
class Scraper extends Component
{

	/**
	 * Returns a SimpleHtmlDom crawler object with the given URL loaded.
	 * (Provided for backwards compatibility with Scraper 1.x)
	 *
	 * @param $url
	 *
	 * @return \simplehtmldom_1_5\simple_html_dom
	 *
	 * @throws InvalidConfigException
	 */
	public function get($url)
	{
		return $this->using('simplehtmldom')->get($url);
	}

	/**
	 * @param string $client
	 * @param array $guzzleOptions
	 *
	 * @return BaseClient
	 *
	 * @throws \yii\base\InvalidConfigException
	 */
	public function using(string $client, $guzzleOptions = [])
	{

		$client = strtolower($client);

		if ($client === 'simplehtmldom')
		{
			$client = new SimpleHtmlDomClient();
		}
		elseif ($client === 'symfony')
		{
			$client = new GoutteClient();
		}
		else
		{
			throw new InvalidConfigException("`{$client}` is not a valid client option.");
		}

		return $client->setGuzzleClient($guzzleOptions);

	}

}

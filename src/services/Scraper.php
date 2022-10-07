<?php
namespace TopShelfCraft\Scraper\services;

use TopShelfCraft\Scraper\clients\BaseClient;
use TopShelfCraft\Scraper\clients\GoutteClient;
use TopShelfCraft\Scraper\clients\SimpleHtmlDomClient;
use TopShelfCraft\Scraper\lib\SimpleHtmlDom\simple_html_dom;
use yii\base\Component;
use yii\base\InvalidConfigException;

class Scraper extends Component
{

	const SIMPLE_HTML_DOM = 'simplehtmldom';
	const SYMFONY = 'symfony';

	/**
	 * Returns a SimpleHtmlDom crawler object with the given URL loaded.
	 * (Provided for backwards compatibility with Scraper 1.x)
	 */
	public function get(string $url): simple_html_dom
	{
		return $this->using(self::SIMPLE_HTML_DOM)->get($url);
	}

	/**
	 * Returns a crawler object using the specified client library.
	 *
	 * @throws InvalidConfigException
	 */
	public function using(string $client, array $guzzleOptions = []): BaseClient
	{

		$client = strtolower($client);

		if ($client === self::SIMPLE_HTML_DOM)
		{
			$client = new SimpleHtmlDomClient();
		}
		elseif ($client === self::SYMFONY)
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

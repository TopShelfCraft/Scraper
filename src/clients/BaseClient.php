<?php
namespace TopShelfCraft\Scraper\clients;

use craft\base\Component;
use GuzzleHttp\Client;
use yii\base\InvalidConfigException;

abstract class BaseClient extends Component
{

	/**
	 * @var Client The Guzzle client which the  be used to fetch remote content
	 */
	protected Client $_guzzleClient;

	/**
	 * @throws InvalidConfigException
	 */
	public function setGuzzleClient(Client|array $client = []): self
	{

		if (is_array($client))
		{
			$client = new Client($client);
		}

		if (!($client instanceof Client))
		{
			throw new InvalidConfigException("The client must be a valid GuzzleHttp Client object.");
		}

		$this->_guzzleClient = $client;

		return $this;

	}

	/**
	 * Returns a crawler object with the remote source loaded.
	 */
	public abstract function get(string $url);

	protected function getGuzzleClient(): Client
	{

		if (!isset($this->_guzzleClient))
		{
			$this->_guzzleClient = new Client();
		}

		return $this->_guzzleClient;

	}

}

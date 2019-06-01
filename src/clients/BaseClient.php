<?php
namespace topshelfcraft\scraper\clients;

use craft\base\Component;
use GuzzleHttp\Client;
use yii\base\InvalidConfigException;

/**
 * @author Michael Rog <michael@michaelrog.com>
 * @package Scraper
 * @since 3.0.0
 */
abstract class BaseClient extends Component
{

	/*
	 * Private properties
	 */

	/**
	 * @var Client The Guzzle client which the  be used to fetch remote content
	 */
	protected $_guzzleClient;

	/*
	 * Public methods
	 */

	/**
	 * @param array|Client $client
	 *
	 * @return $this
	 *
	 * @throws InvalidConfigException
	 */
	public function setGuzzleClient($client = [])
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
	 * Returns a crawler object with the remote source loaded
	 *
	 * @param $url
	 */
	public abstract function get($url);

	/*
	 * Protected methods
	 */

	/**
	 * @return Client
	 */
	protected function getGuzzleClient()
	{

		if (!isset($this->_guzzleClient))
		{
			$this->_guzzleClient = new Client();
		}

		return $this->_guzzleClient;

	}

}

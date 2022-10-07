<?php
namespace TopShelfCraft\Scraper\view;

use TopShelfCraft\Scraper\Scraper;
use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;

class TwigExtension extends AbstractExtension implements GlobalsInterface
{

	public function getGlobals(): array
	{
		return [
			'scraper' => Scraper::getInstance()->scraper,
		];
	}

}

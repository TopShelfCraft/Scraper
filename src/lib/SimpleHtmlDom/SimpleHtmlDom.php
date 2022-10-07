<?php
namespace TopShelfCraft\Scraper\lib\SimpleHtmlDom;

require '_functions.php';

class SimpleHtmlDom {

	/**
	 * @return simple_html_dom
	 */
	static public function file_get_html() {
		return call_user_func_array ('\TopShelfCraft\Scraper\lib\SimpleHtmlDom\file_get_html', func_get_args());
	}

	/**
	 * get html dom from string
	 * @return simple_html_dom
	 */
	static public function str_get_html() {
		return call_user_func_array ('\TopShelfCraft\Scraper\lib\SimpleHtmlDom\str_get_html' , func_get_args());
	}

}

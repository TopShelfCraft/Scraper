<?php
namespace topshelfcraft\scraper\lib;

use topshelfcraft\scraper\lib\SimpleHtmlDom\simple_html_dom;

require 'simple_html_dom.php';

class SimpleHtmlDom {

	/**
	 * @return simple_html_dom
	 */
	static public function file_get_html() {
		return call_user_func_array ('\topshelfcraft\scraper\lib\SimpleHtmlDom\file_get_html', func_get_args());
	}

	/**
	 * get html dom from string
	 * @return simple_html_dom
	 */
	static public function str_get_html() {
		return call_user_func_array ('\topshelfcraft\scraper\lib\SimpleHtmlDom\str_get_html' , func_get_args());
	}

}

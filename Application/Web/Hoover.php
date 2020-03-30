<?php
namespace Application\Web;

use DOMDocument;

class Hoover {

	protected $content = NULL;

	/**
	* Populaties $content from $url
	* @param string $url = website to scan
	* @return DOMDocument $content
	*/
	public function getContent($url) {
		if (stripos($url, 'http')) {
			# code...
		}
	}

}
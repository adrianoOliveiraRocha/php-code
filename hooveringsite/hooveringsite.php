<?php

class Test extends
{
	
	function __construct(argument)
	{
		//
	}

	function getContent($url){
		if (!$this->content) {
			if (stripos($url, 'http') !== 0) {
				$url = 'http://' .$url;
			}
		}
	}
}


getContent('http://www.google.com');
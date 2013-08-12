<?php
class Crawl {
	function __construct() {
		$this->tlds = array('.com', '.net', '.org', '.ca', '.ru', '.ro', '.nl', '.co', '.pw', '.rs');
	}
	public function startcrawl($count, $keyword) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	$randomString = '';
    	$i = 0;
		while($i <= $count) {
			// Just like jQuery, but we wil crawl using the server. (non client side)
        	$randomString .= $characters[rand(0, strlen($characters) - 1)];
        	foreach($this->tlds as $tld) {
        		$randomStrng .= $tld;
        	}
        	$contents = file_get_contents($randomString);
        	if(stristr($keyword, $contents)) { $results = 'FOUND KEYWORD IN: '.$contents; return $results; } else { $none = 'NO KEYWORD'; return $none; }
		}
	}
	public function targetedcrawl($url, $keyword) {
		// For targeted crawling of a specificed website

	}
}
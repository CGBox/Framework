<?php
class Remap {
	function __construct() {
		$this->url = $_GET['url'];
	}
	public function remap($old, $new) {
		if(strpos($this->url, $old) === false) {
			$this->url = $new;
		}
	}
}
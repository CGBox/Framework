<?php
class Uri {
	function __construct() {
		$this->url = $_GET['url'];
		$this->url = rtrim($this->url, '/');
		$this->url = explode('/', $this->url);
	}
	public function segment($num) {
		return $this->url[$num];
	}
}
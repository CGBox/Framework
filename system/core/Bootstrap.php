<?php
class Bootstrap {
	function __construct() {
		$url = $_GET['url'];
		if(empty($url) || $url=='' || !isset($url)) { // Load default controller, in this case we force default as welcome controller
			require_once('application/controllers/welcome.php');
			$controller = new Welcome;
			$controller->index();
			return false;
		}
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		if(isset($url)) {
			if(file_exists('application/controllers/'.$url[0].'.php')) {
				require('application/controllers/'. $url[0] . '.php');
			} else {
				throw new Exception('The controller does not exist.');
				return false;
			}
			$controller = new $url[0]; // Create new controller
			if(isset($url[1])) {
				$controller->{$url[1]}();
			} elseif(isset($url[2])) {
				$controller->{$url[1]}{$url[2]}();
			} else {
				$controller->index();
			}
		}
	}
}
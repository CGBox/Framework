<?php
class Rum {
	function __construct() {
		$this->rum_title = 'RUM Statictics';
		$this->rum_lock = false; // Lock RUM ? true | false
	}
	public function collect() {
		/* USAGE: $this->rum->collect(); */
		$page = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		/* Get Info */
		$ip = $_SERVER['REMOTE_ADDR'];
		$browser = $this->detector->browser();
		$os = $this->detector->os();
		$mobile = $this->detector->mobile();
		$data = 'SPL[IP:'.$ip.']';
		$data .= 'SPL[BROWSER:'.$browser.']';
		$data .= 'SPL[OS:'.$os.']';
		$data .= 'SPL[MOBILE:'.$mobile.']';
		return $data;
	}
}
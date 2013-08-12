<?php
class Detector {
	function __construct() {
		$this->agent = $_SERVER['HTTP_USER_AGENT'];
		/* Mobile */
		$this->android = strpos($this->agent, 'Android') ? true : false;
		$this->blackberry = strpos($this->agent, 'BlackBerry') ? true : false;
		$this->iphone = strpos($this->agent, 'iPhone') ? true : false;
		$this->palm = strpos($this->agent, 'Palm') ? true : false;
		/* Desktop Computer */
		$this->linux = strpos($this->agent, 'Linux') ? true : false;
		$this->mac = strpos($this->agent, 'Macintosh') ? true : false;
		$this->win = strpos($this->agent, 'Windows') ? true : false;
		/* Browsers */
		$this->chrome = strpos($this->agent, 'Chrome') ? true : false;
		$this->firefox = strpos($this->agent, 'Firefox') ? true : false;
		$this->firefox_2 = strpos($this->agent, 'Firefox/2.0') ? true : false;
		$this->firefox_3 = strpos($this->agent, 'Firefox/3.0') ? true : false;
		$this->firefox_36 = strpos($this->agent, 'Firefox/3.6') ? true : false;
		$this->msie = strpos($this->agent, 'MSIE') ? true : false;
		$this->msie_7 = strpos($this->agent, 'MSIE 7.0') ? true : false;
		$this->msie_8 = strpos($this->agent, 'MSIE 8.0') ? true : false;
		$this->msie_9 = strpos($this->agent, 'MSIE 9.0') ? true : false;
		$this->opera = preg_match("/\bOpera\b/i", $this->agent);
		$this->safari = strpos($this->agent, 'Safari') ? true : false;
		$this->safari_2 = strpos($this->agent, 'Safari/419') ? true : false;
		$this->safari_3 = strpos($this->agent, 'Safari/525') ? true : false;
		$this->safari_31 = strpos($this->agent, 'Safari/528') ? true : false;
		$this->safari_4 = strpos($this->agent, 'Safari/531') ? true : false;
	}
	public function mobile() {
		if($this->agent) {
			/* Run loop to check */
			if($this->android) {
				return 'Android';
			} elseif($this->blackberry) {
				return 'BlackBerry';
			} elseif($this->iphone) {
				return 'iPhone';
			} elseif($this->palm) {
				return 'Palm';
			} else {
				return 'Unknown/Other';
			}
		}
	}
	public function os() {
		if($this->agent) {
			/* Run loop to check */
			if($this->linux) {
				return 'Linux';
			} elseif($this->mac) {
				return 'Mac';
			} elseif($this->win) {
				return 'Windows';
			} else {
				return 'Unknown/other';
			}
		}
	}
	public function browser() {
		if($this->agent) {
			/* Run loop to check */
			if($this->chrome) {
				return 'Chrome';
			} elseif($this->firefox || $this->firefox_2 || $this->firefox_3 || $this->firefox_36) {
				return 'Firefox';
			} elseif($this->msie || $this->msie_7 || $this->msie_8 || $this->msie_9) {
				return 'MSIE';
			} elseif($this->opera) {
				return 'Opera';
			} elseif($this->safari || $this->safari_2 || $this->safari_3 || $this->safari_31 || $this->safari_4) {
				return 'Safari';
			}
		}
	}
	public function isbrowser($what) {
		if(!empty($what)) {
			if(strpos($this->agent, $what) !== false) {
				return true;
			} else {
				return false;
			}
		}
	}
	public function ip2continent($ip) {
		if(!empty($ip)) {
			return geoip_continent_code_by_name($ip);
		}
	}
	public function ip2countrycode($ip) {
		if(!empty($ip)) {
			return geoip_country_code_by_name($ip);
		}
	}
	public function ip2countryname($ip) {
		if(!empty($ip)) {
			return geoip_country_name_by_name($ip);
		}
	}
}
?>
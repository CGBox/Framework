<?php

class Detector {
	
	protected $userAgent = null;
	protected $browserName = "Unknown/Other";
	protected $osName = "Unknown/Other";
	protected $deviceName = "Unknown/Other";
	
	/**
	 *  List of devices as:
	 *  <deviceId> => <deviceName>
	 */
	protected $deviceList = array(
			"Android" => "Android",
			"BlackBerry" => "BlackBerry",
			"iPhone" => "iPhone",
			"Palm" => "Palm"
		);
		
	/**
	 *  List of operating systems as:
	 *  <osId> => <osName>
	 */
	protected $osList = array(
			"Linux" => "Linux",
			"Macintosh" => "Macintosh",
			"Windows" => "Windows"
		);
		
	/**
	 *  List of browsers as:
	 *  <browserId> => <browserName>
	 */
	protected $browserList = array(
			"Chrome" => "Chrome",
			"Firefox" => "Firefox",
			"Firefox/2.0" => "Firefox",
			"Firefox/3.0" => "Firefox",
			"Firefox/3.6" => "Firefox",
			"MSIE" => "MSIE",
			"MSIE 7.0" => "MSIE",
			"MSIE 8.0" => "MSIE",
			"MSIE 9.0" => "MSIE",
			"Opera" => "Opera",
			"Safari" => "Safari"
		);
		

	public function __construct() {
		$this->userAgent = $_SERVER['HTTP_USER_AGENT'];
		
		$this->retreiveDeviveName();
		$this->retreiveOsName();
		$this->retreiveBrowserName();
	}
	
	
	public function getDeviceName() {
		if($this->userAgent) {
			return $this->deviceName;
		}
	}
	
	public function getOsName() {
		if($this->userAgent) {
			return $this->osName;
		}
	}
	
	public function getBrowserName() {
		if($this->userAgent) {
			return $this->browserName;
		}
	}


	public function isBrowser($what) {
		if(!empty($what)) {
			return (strpos($this->userAgent, $what) !== false);
		} else {
			return false;
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
	
	
	
	// Detects operating system name
	private function retreiveOsName() {
		foreach($this->osList as $osId => $osName) {
			if(strpos($this->userAgent, $osId)) {
				$this->osName = $osName;
				break;
			}
		}
	}
	
	// Detects user device
	private function retreiveDeviceName() {
		foreach($this->deviceList as $deviceId => $deviceName) {
			if(strpos($this->userAgent, $deviceId)) {
				$this->deviceName = $deviceName;
				break;
			}
		}
	}
	
	// Detects browser
	private function retreiveBrowserName() {
		foreach($this->browserList as $browserId => $browserName) {
			if(strpos($this->userAgent, $browserId)) {
				$this->browserName = $browserName;
				break;
			}
		}
	}
}
?>

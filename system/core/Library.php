<?php
class Library {
	function __construct() {
		$this->libsdir = 'application/librarys/';
	}
	public function load($name) {
		if(file_exists($this->libsdir.''.$name.'.php')) {
			require $this->libsdir.''.$name.'.php';
			$this->$name = new $name;
		}
	}
}
?>
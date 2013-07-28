<?php
class Model {
	function __construct() {
		$this->modeldir = 'application/models/';
	}
	public function load($name) {
		require $this->modeldir.''.$name.'.php';
		$this->$name = new $name;
	}
	function __get($key)
	{
		$fw =& Controller::get_instance();
		return $fw->$key;
	}
}
?>
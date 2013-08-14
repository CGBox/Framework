<?php
class hello {
	function __construct() {

	}
	public function getconfig() {
		// required function [obj: getconfig]
		$arr = array(
			'plugin_name' => 'hello world',
			'plugin_version' => '1.0',
			'plugin_creator' => 'cgbox',
			'auth_site' => 'http://cgbox.tk/',
			'plugin_displayinhtml' => 'true' // args: true or false
		);
		return $arr;
	}
	public function msg($msgcontent) {
		// This is a simple example.
		// To call this, use $this->plugin->hello->msg('text here');
		echo htmlspecialchars(strip_tags($msgcontent));
	}
}
?>
<?php
class Plugin {
	function __construct() {

	}
	public function _load($plugin) {
		if(file_exists('application/plugins/'.$plugin.'.php')) {
			require_once('application/plugins/'.$plugin.'.php');
			$this->$plugin = new $plugin;
			$config = $this->$plugin->getconfig();
			$plugin_name = $config['plugin_name'];
			$plugin_version = $config['plugin_version'];
			if($config['plugin_displayinhtml']!=false) {
				$display = '<!-- ';
				$display .= 'Plugin '.$plugin_name.'\r\nVersion '.$plugin_version.'\r\nCreated by '.$config['plugin_creator'].'\r\nAuthors website '.$config['auth_site'];
				$display .= ' -->';
			}
		} else {
			$error = '<b>File '.$plugin.'.php does not exist.</b>';
			echo $error;
		}
	}
	public function _getcfg($plugin) {
		$config = $this->$plugin->getconfig();
		return $config;
	}
}
?>
<?php
class Helper {
	public function load($helpername) {
		require_once('system/helpers/'.$helpername.'.php');
		$this->$helpername = new $helpername;
	}
	public function load_ex($helpername, $helperpath) {
		if(file_exists($helperpath.''.$helpername.'.php')) {
			require_once($helperpath.''.$helpername.'.php');
			$this->$helpername = new $helpername;
		}
	}
}
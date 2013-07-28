<?php /** Note: There are some issues in this with loading. We are still fixing them. */
class Template { 
	function __construct() {
		$this->tpldir = 'application/templates/';
	}
	function loadCSS($csspath, $cssfile) {
		if(file_exists($this->tpldir.''.$csspath.'/'.$cssfile)) {
			require_once($this->tpldir.''.$csspath.'/'.$cssfile.'.js');
		}
	}
	function loadJS($jspath, $jsfile) {
		if(file_exists($this->tpldir.''.$jspath.'/'.$jsfile)) {
			require_once($this->tpldir.''.$jspath.'/'.$jsfile.'.js');
		}
	}
	function loadOT($otpath, $otfile) {
		if(file_exists($this->tpldir.''.$otpath.'/'.$otfile)) {
			require_once($this->tpldir.''.$otpath.'/'.$otfile);
		}
	}
}
?>
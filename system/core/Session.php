<?php
class Session {
	function __construct() {
	}
	public function set_userdata($ses, $param = false) {
		if(is_array($ses)) {
			foreach($ses as $sn => $sv) {
				$_SESSION[$sn] = $sv;
			}
		} else {
			$_SESSION[$param] = $ses;
		}
	}
	public function userdata($ex) {
		return $_SESSION[$ex];
	}
	public function dc() {
		session_destroy();
	}
	public function dco($xc) {
		unset($_SESSION[$xc]);
	}
}
?>
<?php
class Input {
	function get($getvar) {
		return $_GET[$getvar];
	}
	function post($postvar, $spe=false) {
		$postvar = $_POST[$postvar];
		$postvar = htmlentities($postvar);
		if($spe!=false) {
			$postvar = htmlspecialchars($postvar, ENT_QUOTES);
		}
		return $getvar;
	}
}
?>
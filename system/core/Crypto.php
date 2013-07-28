<?php
class Crypto {
	function __construct() {
		$this->enc_core = '?&uha5#zacraYaq4xe7e=ufrekegusp4'; // OLD: 4gzcF2FV8e8nXz8Pm4DDKuWOX4W22p7z
		$this->enc_core_fun = 'S2t@GU!#aHas*4b9f+_Ha8AQAcrey$f3guyEp=e!_ut9edrEduQAmu*t-heCa8U*+rathus?a$=mePeSuswapaT?3acexazuhaphe26ecrebesP_hezag*desw2sewEpSt$swAYaWEB9ah-speSW?xuFEdretEkeDam&WAWR+R2phethestuPu7He8u6ube2'; // Default encryption key
		$this->enc_core_hex = dechex(ord($this->enc_core));
		$this->iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC), MCRYPT_DEV_RANDOM);
	}
	public function encode_text($text) {
		$iv = $this->iv;
		$text = htmlspecialchars($text);
		$text = trim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $this->enc_core, $text, MCRYPT_MODE_CBC, $iv)));
		return $text;
	}
	public function decode_text($text) {
		$iv = $this->iv;
		$text = htmlspecialchars($text);
		$text = trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $this->enc_core, base64_decode($text), MCRYPT_MODE_CBC, $iv));
		return $text;
	}
}
<?php
class Html5 {
	function __construct() {
		$this->download = '<a href="url" download="true">text</a>';
	}	
	public function download($url, $text, $filename) {
		$string = $this->download;
		$string = str_replace("url", $url, $string);
		$string = str_replace("text", $text, $string);
		$string = str_replace("true", $filename, $string);
		return $string;
	}
	public function video($src, $type, $width, $height) {
		$string = '<video width="'.$width.'" height="'.$height.'" controls>';
		$string .= '<source src="'.$src.'" type="'.$type.'">';
		$string .= 'Your browser does not support the video tag.';
		$string .= '</video>';
		return $string;
	}
}
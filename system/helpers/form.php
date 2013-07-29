<?php
class Form {
	function __construct() {
		$this->baseurl = $_SERVER['HTTP_HOST'];
	}
	public function form_open($url, $method='POST') {
		if($method=='post' || $method=='POST') { $method = 'POST'; } else { $method = 'GET'; }
		echo "<form action='http://".$this->baseurl."/".$url."' method='".$method."'>";
	}
	public function form_close() {
		echo "</form>";
	}
	public function input($name, $type, $id, $value=null) {
		if($value!=null) {
			$v = $value;
		} else {
			$v = '';
		}
		echo '<input name="'.$name.'" value="'.$value.'" id="'.$id.'" type="'.$type.'">';
	}
}
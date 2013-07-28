<?php
class View {
	function __construct() {
		$this->viewdir = 'application/views/';
	}
	public function load($name) {
		if(file_exists($this->viewdir.''.$name.'.php')) { 
			require $this->viewdir.''.$name.'.php'; 
		}
		else { 
			$this->redirect('index.php?err_code=404');
		}
	}
	public function redirect($url) {
		header('Location: '.$url);
	}
	function __get($key) /* To let views act like controllers in the $this->{class}->{method}(); */
	{
		$fw =& Controller::get_instance();
		return $fw->$key;
	}
}
?>
<?php
class Welcome extends Controller {
	function __construct() {
		parent::__construct();
	}
	function index() {
		/**
		 * Index Page for this controller.
		 *
		 * Maps to the following URL
		 * 		http://example.com/index.php?url=welcome
		 *	- or -  
		 * 		http://example.com/welcome/index
		 */
		$this->view->load('welcome_message');
	}
}
?>
<?php
class Updates extends Controller {
	function __construct() {
		parent::__construct();
	}
	function index() {
		$this->model->load('update_check');
		$this->model->update_check->check();
	}
}
?>
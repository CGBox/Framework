<?php
class Controller {
	private static $instance;
	public function __construct() {
		self::$instance =& $this;
		$this->view = new View;
		$this->model = new Model;
		$this->tpl = new Template;
		$this->input = new Input;
		$this->lib = new Library;
		$this->session = new Session;
		$this->security = new Security;
		$this->crypto = new Crypto;
		$this->detect = new Detector;
		$this->helper = new Helper;
		$this->editor = new Editor;
		$this->rum = new Rum;
		$this->remap = new Remap;
		global $db;
		$this->db = $db;
	}
	public static function &get_instance() {
		return self::$instance;
	}
}
?>
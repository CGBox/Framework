<?php
class Editor {
	function __construct() {
		$this->editor_dir = 'system/editors/';
	}
	public function ck($name) {
		/* Editor: CKEditor */
		echo '<script type="text/javascript" src="system/editors/ckeditor/ckeditor.js"></script>';
		include_once 'system/editors/ckeditor/ckeditor.php';
		$ckeditor = new CKEditor();
		$ckeditor->basePath = 'system/editors/ckeditor/';
		$ckeditor->config['filebrowserBrowseUrl'] = '/ckfinder/ckfinder.html';
		$ckeditor->config['filebrowserImageBrowseUrl'] = '/ckfinder/ckfinder.html?type=Images';
		$ckeditor->config['filebrowserFlashBrowseUrl'] = '/ckfinder/ckfinder.html?type=Flash';
		$ckeditor->config['filebrowserUploadUrl'] = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
		$ckeditor->config['filebrowserImageUploadUrl'] = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
		$ckeditor->config['filebrowserFlashUploadUrl'] = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
		$ckeditor->editor($name);
	}
}
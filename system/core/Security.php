<?php
class Security {
	function __construct() {
			$this->disallowed_strings = array(
				'document.cookie'	=> '[removed]',
				'document.write'	=> '[removed]',
				'.parentNode'		=> '[removed]',
				'.innerHTML'		=> '[removed]',
				'window.location'	=> '[removed]',
				'-moz-binding'		=> '[removed]',
				'<!--'				=> '&lt;!--',
				'-->'				=> '--&gt;',
				'<![CDATA['			=> '&lt;![CDATA[',
				'<comment>'			=> '&lt;comment&gt;'
			);
			$this->disallowed_words = array(
				'javascript', 'expression', 'vbscript', 'script', 'base64',
				'applet', 'alert', 'document', 'write', 'cookie', 'window', 
				'eval', 'exec'
			);
	}
	public function clean($v) {
		foreach($this->disallowed_strings as $sname => $newval) {
			if(strpos($v, $sname)) {
				$v = str_replace($sname, $newval, $v);
			}
			foreach($this->disallowed_words as $word) {
				if(strpos($v, $word)) {
					$v = str_replace($word, '[removed]', $v);
				}
			}
		}
		return $v;
	}
}
?>
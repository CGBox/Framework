<?php
require_once('system/config/settings.php');
global $settings;
if($settings['dev']==false) {
	error_reporting(0);
}
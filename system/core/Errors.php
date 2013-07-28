<?php
if($_GET['err_code']) {
	echo 'Error was given, error code: '.$_GET['err_code'];
	return false;
}
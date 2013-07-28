<?php
		require_once('system/config/settings.php');
		global $settings; // To fix some issues.
		if($settings['db_enabled']==true) { // Add new db_enabled method to speed up site.
			$host = $settings['db_hostname'];
			$dbname = $settings['db_name'];
			$dbusername = $settings['db_username'];
			$dbpassword = $settings['db_password'];
			try {
			    $db = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbusername, $dbpassword);
			    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(PDOException $e) {
			    echo 'ERROR: ' . $e->getMessage();
			}
		}
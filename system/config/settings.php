<?php
/* Settings */

$settings = array();

/*  Database Connection Information 
*	Example Configuration:
*	$settings['db_hostname'] = 'localhost';
*	$settings['db_username'] = 'root';
*	$settings['db_password'] = '';
*	$settings['db_name'] = 'framework';
*/
$settings['db_enabled'] = false; // Is database enabled?
$settings['db_hostname'] = ''; // Database Hostname
$settings['db_username'] = ''; // Database Username
$settings['db_password'] = ''; // Database Password
$settings['db_name'] = ''; // Database Name

/* Production or development mode? 
*  Pick if site is in PRODUCTION(no error reporting) or DEVELOPMENT(error reporting) mode.
*/
$settings['dev'] = false; // False = production, true = development
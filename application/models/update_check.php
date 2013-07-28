<?php 
/* For auto checking updates. If you wish to not check updates with the updates controller, please remove updates.php in application/controllers/updates.php*/
class update_check extends Model {
	public function check() {
			$serverinfo = array(
				'check_url' => 'http://cgbox.tk/check.php',
				'method' => 'post'
			);
			$send = array(
				'cur_ver' => '1.0&',
				'cur_build' => 'stable-2.5'
			);
			$ch = curl_init();
			curl_setopt($ch,CURLOPT_URL, $serverinfo['check_url']);
			curl_setopt($ch,CURLOPT_POST, count($send));
			curl_setopt($ch,CURLOPT_POSTFIELDS, $send);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch);
			curl_close($ch);
			echo $result;
	}
}
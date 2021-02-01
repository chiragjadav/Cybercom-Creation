<?php 

$ip_address = $_SERVER['REMOTE_ADDR'];

function hit_count() {
	$ip_file = file('ip.txt');
	foreach ($ip_file as $ip) {
		$ip_single = trim($ip);
		if($ip_address != $ip_single) {
			$found = false;
		} else {
			$found = true;
			break;
		}
	}

	if($found == false) {
		echo 'IP not found.';
	}
}

?>
<?php
$age = 19;

try{
	if($age>18) {
		echo 'Old enough';
	} else {
		throw new Exception('Not enough');
	}
} catch (Exception $ex) {
	echo 'Error :'.$ex->getMessage();
}

?>
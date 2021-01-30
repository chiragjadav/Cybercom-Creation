<?php ob_start(); ?>

<h1>My Page</h1>

<?php
$redirect_page = 'random_number.php';
$redirect = false;

if($redirect == true) {
	header('Location: '.$redirect_page);
}


ob_end_flush();
?>
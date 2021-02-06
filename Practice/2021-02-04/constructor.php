<?php
class Example1 {
	public function __construct() {
		echo 'Constructor called<br>';
	}
}

$call1 = new Example1();
class Example2 {
	public function __construct($value) {
		echo $value;
	}
}
$call2 = new Example2('Hello');
?>
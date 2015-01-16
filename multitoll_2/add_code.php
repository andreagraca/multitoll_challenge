<?php
	include "class/class.code.php";
	$code = new Code; 

	$size_code = $_POST['size'];
	$number_codes = $_POST['number'];

	$result = $code->insert_code($size_code, $number_codes);


?>
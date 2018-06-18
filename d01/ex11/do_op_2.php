#!/usr/bin/php
<?php 
	if ($argc != 2) {
		echo "Incorrect Parameters\n";
		exit();
	}
	$calc = str_replace(" ", "", $argv[1]);
	$n1 = intval($calc);
	$argm = substr(substr($calc, strlen((string)$n1)), 0, 1);
	$n2 = substr(substr($calc, strlen((string)$n1)), 1);
	if (!is_numeric($n1) || !is_numeric($n2)) {
		echo "Syntax Error\n";
		exit();
	}
	switch ($argm) {
		case ("*"):
			echo $n1 * $n2;
			break;
		case ("/"):
			echo $n1 / $n2;
			break;
		case ("+"):
			echo $n1 + $n2;
			break;
		case ("-"):
			echo $n1 - $n2;
			break;
		case ("%"):
			echo $n1 % $n2;
			break;
	}
	echo "\n";
?>

<?php
$name = "John";
echo "Это  \t не будет развернуто: {$name} \n новая строка \n ";

$str = <<<EOD
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>$name</title>
	</head>
EOD;
echo $str;

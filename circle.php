<?php
$name = "Площа кола";
$x = rand(5, 300);
$s = round(M_PI * $x ** 2);
$begin = <<<EOD
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>$name</title>
</head>
<body>
  <h1>$name</h1>\n
  <p>Площа кола - <b>$s</b></p>
  <p>Радіус - <b>$x</b></p>
EOD;
echo $begin;
echo "<div style=\"background-color: lightblue; border-radius: 50%; width: 200px; height: 200px;\"></div>";
echo "<div style=\"background-color: purple; border-radius: 50%; width: ".($x * 2)."px; height: ".($x * 2)."px;\"></div>";
$end = <<<EOD
</body>
</html>
EOD;
echo $end;
<?php
$name = "Площа кола";
$x = rand(5, 1000);
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
echo "<div style=\"background-color: purple; border-radius: 50%; width: ".($x * 2)."px; height: ".($x * 2)."px;\"></div>";
$end = <<<EOD
</body>
</html>
EOD;
echo $end;
// $x = rand(1, 1000);
// $s = round(M_PI * $x ** 2);

// $begin = <<<EOD
// <!DOCTYPE html>
// <html>
// <head>
// 	<meta charset="UTF-8">
//     <title>Площа кола</title>
// </head>
// <body>
// <h2> Площа кола</h2>
// <p>Площа - <b>$s</b></p>
// <p>Радіус - <b>$x</b></p>
// EOD;
// echo $begin;
// $x = rand(50, 200);
// echo "<div style=\"background-color: purple; border-radius: 50%; width: ".(2 * $x)."px; height: ".(2 * $x)."px;\"></div>";
// $end = <<<EOD
// </body>
// </html>
// EOD;
// echo $end;
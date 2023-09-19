<?php
$name = "У лікаря";
$begin = <<<EOD
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>$name</title>
</head>
<body>
  <h1>$name</h1>\n
EOD;
echo $begin;
$end = <<<EOD
</body>
</html>
EOD;

$x = rand(350, 420)/10;
// if ($x < 37) {
//     echo "<p style=\"color:blue;\">$x - Здоров!</p>";
// } elseif ($x > 37) {
//     echo "<p style=\"color:red;\">$x- Хворий!</p>";
// } else {
//     echo "<p style=\"color:yellow;\">$x - Щось нездужає....</p>";
// }
$str = ($x < 37) ?  "<p style='color:blue;'>".$x ." - Здоров!</p>" :  (($x > 37) ?  "<p style='color:red;'>".$x." - Хворий!</p>" :  "<p style='color:yellow;'>".$x." - Щось нездужає...</p>");
echo $str;
echo $end;
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>$name</title>
</head>
<body>

  <h1>$name</h1>\n
  <p>Площа кола - <b>$s</b></p>
<?php
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    echo "\t<h$i>Заголовок $i</h$i>\n";
}
?>
</body>
</html>
<?php
$a = rand(-20, 20);
$b = rand(-20, 20);
$c = rand(-20, 20);
$d = $b * $b - 4 * $a * $c;
echo "a = $a <br>b = $b <br> c=$c <br>";
echo "$a*x**2 + $b*x +$c = 0 <br>";
echo "Дискримінант = $d <br>";
if ($d > 0) {
    $x1 = -($b + sqrt($d) / (2 * $a));
    $x2 = -($b - sqrt($d) / (2 * $a));
    echo "x1 = $x1 <br> x2 = $x2";
} elseif ($d == 0) {
    $x1 = $x2 = -($b / (2 * $a));
    echo "Дискримінант дорівнює 0, тому обидва корені = $x1";
} elseif ($d < 0) {
    echo "Дискримінант менше 0, тому коренів немає";
}
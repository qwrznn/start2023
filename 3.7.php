<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.7 Термометр</title>
</head>
<body>
    <h1>3.7 Термометр</h1>
    <table>
        <tr>

            // $n = -20;
            // $i = 2;
            // for ($i = 20; $i <= $n; $i--)
            //    echo $i;
            
        </tr>
    </table>
</body>
</html> -->

<table>
            <?php
            $n = rand(20, -20);
            for ($i = 20; $i >= $n; $i--)
            echo "<tr><td>$i</td><td style=width:30px;background:yellow></td></tr>\n";

            for ($i = $n; ; $i--){
                if ($i > -20) {
                echo "<tr><td>$i</td><td style=width:30px;background:red></td></tr>\n";
                }
                else {
                    break;
                }
            }
            ?>
</table>
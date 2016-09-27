<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td {
            height: 30px;
            width: 50px;
        }
    </style>
</head>
<body>

</body>
</html>

<?php

$colors = array('red','yellow','blue','gray','maroon','brown','green');
$cols = rand(3,8);
$rows = rand(5,14);
echo '<table>';
for ($i = 1; $i <= $rows; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= $cols; $j++) {
        $r = dechex(rand(0,255));
        $g = dechex(rand(0,255));
        $b = dechex(rand(0,255));
        $color = "#$r$g$b";
        $style = "style='background: $color'";
        echo "<td $style>$color</td>";
    }
    echo '</tr>';
}
echo '</table>';

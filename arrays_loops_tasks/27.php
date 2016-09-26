<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<style

</body>
</html>

<?php


$cols = rand(2,5);
$rows = rand(2,5);

$r = dechex (rand(0,255));
$q = dechex (rand(0,255));
$b = dechex (rand(0,255));
$color = "#$r$q$b";
$style = "";

echo '<table>';
for ($i =1; $i <= $rows; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= $cols; $j++) {
        echo '<td style 'background: rgb ($color) '>$color'</td>;
        echo
    }
}
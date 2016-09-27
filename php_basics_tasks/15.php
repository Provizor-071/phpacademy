<?php

$a = 10;
$b = 3;

$deistvie = "*";


switch ($deistvie) {
    case "+": echo $a + $b; break;
    case "-": echo $a - $b; break;
    case "*": echo $a * $b; break;
    case "/": echo round(($a / $b),1); break;
    case "%": echo ($a % $b); break;
    default: echo 'Неизвестный оператор';
}

if ($b = 0) {
    echo 'На ноль делить нельзя';
}






















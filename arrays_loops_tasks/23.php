<?php


$chel = 124;  // получилось сделать только с трехзначным числом




$t = $chel / 10;

$tt = $t - (int)$t;

$ttt = $tt * 10;


$r = (int)$t / 10;

$rr = $r - (int)$r;

$rrr = $rr * 10;


$f = (int)$r / 10;

$ff = $f - (int)$f;

$fff = $ff * 10;


$supercod = $ttt + $rrr + $fff;

echo $supercod;





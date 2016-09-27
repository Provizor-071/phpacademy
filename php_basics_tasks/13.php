<?php

$s = 23.4;  //км

$t = 4.2;   //часов

$skorosti = $s / $t;

$skorostivmetrah = $skorosti * 1000;


echo round($skorosti,1) . ' км/час <br>';

echo round($skorostivmetrah ,1) . ' м/сек <br>';





<?php

$arr = array('Коля' => '200', 'Вася' => '300', 'Петя' => '400');

foreach ($arr as $name => $zarplata) {
    echo $name . '— зарплата ' . $zarplata . ' долларов <br>';
}
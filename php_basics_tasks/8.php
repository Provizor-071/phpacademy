<?php

$age = -2;

if ($age < 18) {
    echo "Вам еще рано работать";
} elseif ($age > 59) {
    echo "Вам пора на пенсию";
}  elseif (!is_numeric($age) || $age < 0){
    echo "Неизвестный возраст";
}   else {
    echo "Вам еще работать и работать";
}

<?php

$age = 72;

if (!is_numeric($age) || $age < 0){
    echo "Неизвестный возраст";
} elseif ($age < 18) {
    echo "Вам еще рано работать";
} elseif ($age > 59) {
    echo "Вам пора на пенсию";
}   else {
    echo "Вам еще работать и работать";
}

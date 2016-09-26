<?php


$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

$en = $ru = []; // - за счет квадратных скобок показываем, что $en есть масивом


foreach ($arr as $key => $item) {
    $en[] = $key;
    $ru[] = $item;


}

print_r($en);
echo '<br>';
print_r($ru);
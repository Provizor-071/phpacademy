<?php


$arr = [];

for ($i = 1; $i <= 5; $i++) {
    $arr[] = rand(1, 500);
    }


echo max($arr);
echo min($arr);

print_r($arr);


list($arr[], $arr[]) = array($arr[], $arr[]);
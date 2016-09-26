<?php

$pereminna = 32492239439509;
$chislo = 3;

   $string = (string)$pereminna;
   $null = 0;
    for ($i=0; $i < strlen($string); $i++) {
        if ($string[$i] == $chislo)
            $null++;

    }
    if ($null)
        echo "Вы ввели $chislo . Эта цифра встречается $null раза в числе $pereminna";
    else
        echo "Вы ввели $chislo . Этой цифры нет в числе $pereminna";




















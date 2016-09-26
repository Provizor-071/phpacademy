<?php

for($i = 1; $i <= 9; $i++){
    for ($j = 1; $j <= $i; $j++){
        echo $i;
    }
    echo '</br>';
}


echo '</br>';
echo '</br>';

//вариант 2


echo '<table>';
for($i = 1; $i <= 9; $i++){
    echo "<tr>";
    for ($j = 1; $j <= $i; $j++){
        echo '<td>' . $i . '</td>';
    }
    echo "</tr>";
}
echo '</table>';



<?php

$nums = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10');
echo "<table border=1><tr>";
foreach($nums as $i) {
    foreach($nums as $j) {
        echo "<td>" . ($i * $j) . "</td>";
    }
        if ($i != 10) echo "</tr><tr>";

}

echo "</tr></table>";

<?php


$months = array('jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

$month = date('M');

foreach ($months as $i) {
    if ($month == $i) {
         echo '<b>' . $i . '</b>' . '<br>';
    } else {
        echo $i . '<br>';
    }

}




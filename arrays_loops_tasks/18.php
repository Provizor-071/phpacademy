 <?php

$week = array('Mon', 'Tues', 'Wed', 'Thur', 'Friday', 'Sat', 'Sun');

// $day = date('D');

foreach ($week as $d) {
    if ($d === 'Sat' || $d === 'Sun') {
        echo '<b>' . $d . '</b>' . '<br>';
    } else {
        echo $d . '<br>';
    }

}



<?php

$a = [[1, 3, 4], [2, 5], [2 => 3, 5 => 8], [1, 1, 5 => 1]];

$stulpelis = [];

foreach ($a as $key => $stulpeliai){


    $stulpelis = array_sum($stulpeliai);

    echo 'Stulpelio suma: ' . $stulpelis;
    echo '<br>';

}


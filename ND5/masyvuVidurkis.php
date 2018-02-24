<?php

$a = [5, 6, 10, 15];
$b = [8, 5, 3, 25];

function masyvoVidurkis($a, $b){
    $average1 = array_sum($a) / count($a);
    $average2 = array_sum($b) / count($b);
    $average = $average1 - $average2;

    echo 'Pirmo masyvo vidurkis: ' . $average1;
    echo '<br>';
    echo 'Antro masyvo vidurkis: ' . $average2;
    echo '<br>';
    echo 'Masyvu vidurkiu skirtumas: ' . $average;
}

masyvoVidurkis($a, $b);
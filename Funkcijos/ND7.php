<?php

$a = [5, 6, 10, 15];
$b = [8, 5, 3, 25];

function masyvoVidurkis($a, $b){
    $average = array_sum($a) / count($a);
    $average1 = array_sum($b) / count($b);
    echo 'Pirmo masyvo vidurkis: ' . $average;
    echo '<br>';
    echo 'Antro masyvo vidurkis: ' . $average1;
    echo '<br>';
}

masyvoVidurkis($a, $b);
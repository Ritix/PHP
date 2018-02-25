<?php

$masyvas = [[1, 3, 4], [2, 5], [2 => 3, 5 => 8], [1, 1, 5 => 1]];

$stulpelis = [];

foreach ($masyvas as $key => $stulpeliai){


    $stulpelis = array_sum($stulpeliai);

    echo 'Stulpelio suma: ' . $stulpelis;
    echo '<br>';

}

$sumos = [];
$max_reiksme = 0;

foreach($masyvas as $masyvo_indeksas => $stulpelis) {

    $sumos[$masyvo_indeksas] = 0;

    foreach($stulpelis as $stulpelio_reiksme) {
        $sumos[$masyvo_indeksas]+=$stulpelio_reiksme;
    }
}

foreach($sumos as $suma) {
    if($suma > $max_reiksme) {
        $max_reiksme = $suma;
    }
}

$max_reiksme = max($sumos);


echo 'Max reikšmė: ' .  $max_reiksme.'<p>';
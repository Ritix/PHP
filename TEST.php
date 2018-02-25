<?php

$masyvas = [[1, 3, 4], [2, 5], [2 => 3, 5 => 8], [1, 1, 5 => 1]];

$sumos = [];
$max_reiksme = 0;

foreach($masyvas as $masyvo_indeksas => $stulpelis) {

    $sumos[$masyvo_indeksas] = 0;

    // imam kiekviena stulpeli is masyvo

    // galima pamegint suskaiciuot su ciklu, kad perprast esme.
    foreach($stulpelis as $stulpelio_reiksme) {
        $sumos[$masyvo_indeksas]+=$stulpelio_reiksme;
    }


}

// galima cikla sukti, kad perprast esme.
foreach($sumos as $suma) {
    if($suma > $max_reiksme) {
        $max_reiksme = $suma;
    }
}

echo $max_reiksme.'<p>';

// arba
$max_reiksme = max($sumos);

echo $max_reiksme.'<p>';
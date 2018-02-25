<?php

$zmones = [
    ['vardas' => 'Jonas', 'lytis' => 'V'],
    ['vardas' => 'Ona', 'lytis' => 'M'],
    ['vardas' => 'Petras', 'lytis' => 'V'],
    ['vardas' => 'Marytė', 'lytis' => 'M'],
    ['vardas' => 'Eglė', 'lytis' => 'M']
];

foreach ($zmones as $key => $zmogus){
    if ($zmogus['lytis'] == "V"){
        echo $zmogus['vardas'] . ' + ' . "Ona"  .'<br>';
        echo $zmogus['vardas'] . ' + ' . "Marytė"  .'<br>';
        echo $zmogus['vardas'] . ' + ' . "Eglė"  .'<br>';
    }
}
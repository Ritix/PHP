<?php


function pasisveikinimas($name, $surname){
    echo "Labas, $name $surname";
    echo '<br>';
}

pasisveikinimas("Rytis", "Lekstutis");



function masyvoVidurkis($vidurkis){
    $average = array_sum($vidurkis) / count($vidurkis);
    echo $average;
    echo '<br>';
    echo '<br>';
}

$vidurkis = [1, 2, 3, 5, 8];
masyvoVidurkis($vidurkis);


$zmoniuInformacija = [['Vardas'=>'Petras', 'Pavardė'=>'Petraitis', 'El. Paštas'=>'Petras.Petraitis@gmail.com'],
                     ['Vardas'=>'Jonas', 'Pavardė'=>'Jonaitis', 'El. Paštas'=>'Jonas.Jonaitis@gmail.com'],
                     ['Vardas'=>'Tomas', 'Pavardė'=>'Tomaitis', 'El. Paštas'=>'Tomas.Tomaitis@gmail.com'],
                     ['Vardas'=>'Lukas', 'Pavardė'=>'Lukaitis', 'El. Paštas'=>'Lukas.Lukaitis@gmail.com']];

function zmoniuInfo($zmoniuInformacija){
    $ilgis = count($zmoniuInformacija);
    for ($i = 0; $i < $ilgis; $i++){
        echo '<br>';
        //echo ($zmoniuInformacija[$i]['Vardas'] . ' ' . '&nbsp;' .  $zmoniuInformacija[$i]['Pavardė'] . ' ' . '&nbsp;' . $zmoniuInformacija[$i]['El. Paštas']);
        zmoniuPasisveikinimas($zmoniuInformacija[$i]['Vardas'], $zmoniuInformacija[$i]['Pavardė'], $zmoniuInformacija[$i]['El. Paštas']);
    }
}

zmoniuInfo($zmoniuInformacija);

function zmoniuPasisveikinimas($name, $surname, $email){
    echo "Labas, $name $surname $email";
    echo '<br>';
}

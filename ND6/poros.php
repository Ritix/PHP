<?php

//Po 2h bandymu isejo tiek:


$a = ['Jonas', 'Petras', 'Antanas', 'Povilas'];

$jonas = $a[0];
$petras = $a[1];
$antanas = $a[2];
$povilas = $a[3];

$ilgis = count($a);

$suma = [];


for ($i = 0; $i < $ilgis; $i++){
    if ($a[0] != $a[1] || $a[0] != $a[2] || $a[0] != $a[3]){
        if ($a < 1){
            continue;
        }
        echo $a[$i] . ' ' .  $jonas . '<br>';
        echo $a[$i] . ' ' . $petras . '<br>';
        echo $a[$i] . ' ' . $antanas . '<br>';
        echo $a[$i] . ' ' . $povilas . '<br>' . '<br>';
    }
}

//if ($a[0] != $a[1]){
//   echo $a[0] . ' + ' . $a[1];
//}


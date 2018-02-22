<?php

include_once 'masyvai.php';


//Funkcija, apskaiciuojanti kiek praejo laiko nuo zmogaus gimimo datos

function dateDiff($zmones, $differenceFormat = '%y Year %m Month %d Day'){
    foreach ($zmones as $key => $metai){
        $datetime1 = date_create($metai[1]);
        $datetime2 = date("Y/M/D");
        $interval = date_diff($datetime1, $datetime2);
    }
    return $interval->format($differenceFormat);
}


dateDiff($interval);
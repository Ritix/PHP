<?php

$array = [4, 2, 2, 0, 1, 2, 3];


function skaiciuSuma($array){

    $ilgis = count($array);
    $suma = 0;

    for ($i = 0; $i < $ilgis; $i++){
        if ($array[$i] % 2){
            break;
        }
        $suma += $array[$i];
    }
    return $suma;
}


echo skaiciuSuma($array);
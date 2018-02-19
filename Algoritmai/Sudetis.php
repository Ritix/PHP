<?php

//Daugiamacio masyvo pirmu elementu suma

//$a = [[5, 15, 20, 25],
//     [30, 35, 40, 45],
//     [50, 55, 60, 65]];
//
//$ilgis = count($a);
//$suma = 0;
//
//for ($i = 0; $i < $ilgis; $i++){
//
//    $ilgis1 = count($a[$i]);
//
//    for($j = 0; $j < $ilgis1; $j++){
//        $suma = $a[$i][$j];
//
//    }
//}


$a = [[5, 15, 20, 25],
    [30, 35, 40, 45],
    [50, 55, 60, 65]];


//foreach ($a as $i){
//    $suma = array_sum($i);
//    var_dump($suma);
//}
var_dump(array_sum(array_column($a, 0)));


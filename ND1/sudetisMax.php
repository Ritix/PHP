<?php

//Daugiamacio masyvo pirmu elementu suma

$a = [[5, 15, 20, 25],
     [30, 35, 40, 45],
     [50, 55, 60, 65]];

$ilgis = count($a);
$s = [];

for ($i = 0; $i < $ilgis; $i++){

    $ilgis1 = count($a[$i]);

    for($j = 0; $j < $ilgis1; $j++){
        if ($i === 0){
            $s[$j] = $a[$i][$j];
        }else{
            $s[$j] += $a[$i][$j];
        }
    }
}

echo ('Stulpeliu sumos: ' . ' ' . implode(", ",$s) . '<br>');
echo 'Didžiausia stulpelių suma: ' . max($s);


//$a = [[5, 15, 20, 25],
//    [30, 35, 40, 45],
//    [50, 55, 60, 65]];


//foreach ($a as $i){
//    $suma = array_sum($i);
//    var_dump($suma);
//}


//var_dump(array_sum(array_column($a, 0)));


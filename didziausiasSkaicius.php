<?php

$a = [[5, 100, 500, 800], [7, 5, 223, 6, 9]];
$ilgis = count($a);


for ($i = 0; $i < $ilgis; $i++) {

    $max = $a[$i][0];

    $ilgis1 = count($a[$i]);

    for ($j = 0; $j < $ilgis1; $j++) {
        if ($max < $a[$i][$j]) {
            $max = $a[$i][$j];
        }
    }

    echo $max . '<br>';
}




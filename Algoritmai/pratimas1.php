<?php

$a = [[1, 2, 3], [4, 5, 6]];
$ilgis = count($a);

var_dump($a);
echo '<br>';

for ($i = 0; $i < $ilgis; $i++){
    $ilgis2 = count($a[$i]);
    for ($m = 0; $m < $ilgis2; $m++){
        if ($a[$i][$m] % 2 === 0){
            $a[$i][$m]--;
        }
        else{
            $a[$i][$m]++;
        }
        var_dump($a[$i][$m]);
    }
}

echo '<br>';

foreach ($a as $i) {
    if ($i % 2 === 0){
        $i--;
    }
    var_dump($a);
}
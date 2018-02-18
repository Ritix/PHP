<?php
//Trikampiu radimas, ju tipas ir plotas

$a = [[3, 4, 5],
     [2, 10, 8],
     [5, 6, 5],
     [5, 5 ,5]];

foreach ($a as $i){




    if (($i[0] + $i[1] > $i[2]) && ($i[1] + $i[2] > $i[0]) && ($i[2] + $i[0] > $i[1])){

        echo '<br>';
        echo 'Tai yra trikampis';

        $perimetras = $i[0] + $i[1] + $i[2];
        $pusperimetris = $perimetras / 2;
        $plotas = sqrt($pusperimetris*($pusperimetris-$i[0])*($pusperimetris-$i[1])*($pusperimetris-$i[2]));
    }
    else{
        echo '<br>';
        echo 'Tai nera trikampis';
    }
    echo '<br>';

    $trikampioTipas = array_unique($i);

    if (count($trikampioTipas) === 1){

        echo 'Trikampis yra lygiakraštis. ' . ' Jo plotas yra ' . $plotas;
        echo '<br>';
    }
    elseif(count($trikampioTipas) === 2){

        echo 'Trikampis yra lygiašonis. ' . ' Jo plotas yra ' . $plotas;
        echo '<br>';
    }
    elseif(count($trikampioTipas) === 3){

        echo 'Trikampis yra įvairiakraštis. ' . ' Jo plotas yra ' . $plotas;
        echo '<br>';
    }
}
<?php

//$a = [5, 6, 10, 15];
//$b = [8, 5, 3, 25];
//
//function vektoriuDaugyba($a, $b){
//    $daugyba = (($a[0] * $b[0]) + ($a[1] * $b[1]) + ($a[2] * $b[2]) + ($a[3] * $b[3]));
//    echo $daugyba;
//}
//
//vektoriuDaugyba($a, $b);


$zmones1 = [['Vardas'=>'Petras'], ['Pavardė'=>'Petraitis'], ['Asmens kodas'=>'391923013'],
           ['Vardas'=>'Jonas'], ['Pavardė'=>'Jonaitis'], ['Asmens kodas'=>'590145639'],
           ['Vardas'=>'Tomas'], ['Pavardė'=>'Tomaitis'], ['Asmens kodas'=>'105239510'],
           ['Vardas'=>'Kestas'], ['Pavardė'=>'Kestaitis'], ['Asmens kodas'=>'51852018']];

$zmones2 = [['Vardas'=>'Lukas'], ['Pavardė'=>'Lukaitis'], ['Asmens kodas'=>'1951023519'],
           ['Vardas'=>'Kristina'], ['Pavardė'=>'Kristinaite'], ['Asmens kodas'=>'981023191'],
           ['Vardas'=>'Jone'], ['Pavardė'=>'Jonaite'], ['Asmens kodas'=>'0184199123'],
           ['Vardas'=>'Tome'], ['Pavardė'=>'Tomaite'], ['Asmens kodas'=>'9185912319']];


$zmones1[] = $zmones2[0];
//$zmones1[] = $zmones2[1];
//$zmones1[] = $zmones2[2];

//array_push($zmones1, $zmones2[0]);
//array_push($zmones1, $zmones2[1]);

foreach ($zmones2 as $zmogus){

}

var_dump($zmones1);


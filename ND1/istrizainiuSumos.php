<?php

$a = [[5, 15, 20, 25],
      [30, 35, 40, 45],
      [50, 55, 60, 65],
      [70, 75, 80, 85]];

$ilgis = count($a);

$suma = 0;

for ($i = 0; $i < $ilgis; $i++){


   $suma += $a[$i][$i];

   if ($i === $ilgis-1){
       echo $suma;
       echo '<br>';
   }
}


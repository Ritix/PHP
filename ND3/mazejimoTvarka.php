<?php

$array = [-10, 0, 2, 9, -5];

rsort($array);
$ilgis = count($array);

for ($i = 0; $i < $ilgis; $i++){
    echo $array[$i];
    echo '<br>';
}

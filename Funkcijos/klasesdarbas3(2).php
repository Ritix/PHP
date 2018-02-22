<?php

$array = [-1, 2, 3, -6, -5, 8];

function teigiamiSkaiciai($array){
    foreach ($array as $key => $skaicius){
        if ($skaicius < 0){
            continue;
        }
        $tmp = $skaicius;
        unset($array[$key]);
        array_unshift($array, $tmp);
    }
    return $array;
}


var_dump(teigiamiSkaiciai($array));
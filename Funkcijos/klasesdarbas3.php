<?php

$data = ["lala", 5120, 10.10, NULL, true, [], new stdClass()];

function tipas($data)
{
    switch (gettype($data)) {
        case 'string':
            echo 'Šis kintamasis yra string tipo: kintamasis.';
            break;
        case 'integer':
            echo 'Šis kintamasis yra Integer tipo: kintamasis.';
            break;
        case 'double' :
            echo 'Šis kintamasis yra Float tipo: kintamasis.';
            break;
        case 'NULL' :
            echo 'Šis kintamasis yra NULL tipo: kintamasis.';
            break;
        case 'boolean' :
            echo 'Šis kintamasis yra Boolean tipo: kintamasis.';
            break;
        case 'array' :
            echo 'Šis kintamasis yra Array tipo: kintamasis.';
            break;
        case 'object' :
            echo 'Šis kintamasis yra Object tipo: kintamasis.';
            break;
    }
}


//tipas($data[0]);

foreach ($data as $tipas) {
    tipas($tipas);
    echo '<br>';
}
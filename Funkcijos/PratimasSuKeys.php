<?php
$a = [
    '49001010123' => [
        'vardas' => 'Jonas',
        'pavarde' => 'Jonaitis',
        'gdata' => '1990-01-01'
    ],
    '37502055584' => [
        'vardas' => 'Petras',
        'pavarde' => 'Petraitis',
        'gdata' => '1985-02-05'
    ],
    '35019283910' => [
        'vardas' => 'Tomas',
        'pavarde' => 'Tomaitis',
        'gdata' => '1980-03-10'
    ],
    '4801401931' => [
        'vardas' => 'Lukas',
        'pavarde' => 'Lukaitis',
        'gdata' => '1995-04-15'
    ],
];

foreach($a as $key => $zmones ){

    if ((string)$key[0] == 3){
        unset($a[$key]);
    }
}

var_dump($a);
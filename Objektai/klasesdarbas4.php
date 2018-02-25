<?php

require_once 'klasesdarbas4(1).php';

class automobilis{
    public $marke;
    public $modelis;

    function autoDuomenys(){
        return $this->marke . ' ' . $this->modelis;
    }
    public function __construct($marke, $modelis){
        $this->marke = $marke;
        $this->modelis = $modelis;
    }
}


$automobiliai = [
    new svoris('Audi', '80', 2000 ),
    new svoris('BMW', 'e60', 1000 ),
    new svoris('Peugeot', '406', 3000 )
    ];

?>

<html>
<body>
<table>
    <tr>Automobilis  </tr>
    <tr>Svoris  </tr>
    <?php foreach ($automobiliai as $automobilis) { ?>
            <tr>
                <td>
                    <?= $automobilis->autoDuomenys() ?>
                </td>
                <td>
                    <?= $automobilis->svoris ?>
                </td>
            </tr>
    <?php } ?>
</table>
</body>
</html>
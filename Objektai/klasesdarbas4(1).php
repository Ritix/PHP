<?php
require_once 'klasesdarbas4.php';

class Svoris extends automobilis{
    public $svoris;

    public function __construct($marke, $modelis, $svoris){
        parent::__construct($marke, $modelis);
        $this->svoris = $svoris;
    }
}
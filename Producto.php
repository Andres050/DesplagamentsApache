<?php

class Producto {

    public $idPro;
    public $namePro;
    public $descripPro;
    public $pricePro;
    public $img;

    public function __construct($idPro, $namePro,$descripPro, $pricePro,$img) {
        $this->idPro = $idPro;
        $this->namePro = $namePro;
        $this->descripPro = $descripPro;
        $this->pricePro = $pricePro;
        $this->img = $img;
    }

}
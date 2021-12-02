<?php

class Producto {

    public $idPro;
    public $namePro;
    public $descripPro;
    public $pricePro;
    public $img;
    public $quantity;

    public function __construct($idPro, $namePro,$descripPro, $pricePro,$img,$quantity) {
        $this->idPro = $idPro;
        $this->namePro = $namePro;
        $this->descripPro = $descripPro;
        $this->pricePro = $pricePro;
        $this->img = $img;
        $this->quantity = $quantity;
    }

}
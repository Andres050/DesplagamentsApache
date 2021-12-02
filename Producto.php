<?php

class Producto {

    private $idPro;
    private $namePro;
    private $descripPro;
    private $pricePro;
    private $img;

    public function __construct($idPro, $namePro,$descripPro, $pricePro,$img) {
        $this->idPro = $idPro;
        $this->namePro = $namePro;
        $this->descripPro = $descripPro;
        $this->pricePro = $pricePro;
        $this->img = $img;
    }

}
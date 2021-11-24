<?php

class ProductoInsert
{
    private $name;
    private $desc;
    private $price;
    private $img;

    public function __construct($name,$desc, $price,$img) {
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->img = $img;
    }
}
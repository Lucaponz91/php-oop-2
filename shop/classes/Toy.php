<?php
include_once __DIR__ . '/Product.php';
class Toy extends Product{
    public $material;

    function __construct($name, $price, $brand, $categories, $quantity, $material)
    {
        parent::__construct($name, $price, $brand, $categories, $quantity);
        $this->material = $material;
    }
}
<?php
include_once __DIR__ . '/Product.php';
class Kennel extends Product{
    public $size;

    function __construct($name, $price, $brand, $categories, $quantity,$size)
    {
        parent::__construct($name, $price, $brand, $categories, $quantity);
        $this->size = $size;
    }
}
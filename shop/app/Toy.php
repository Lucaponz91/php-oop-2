<?php
include_once __DIR__ . '/Product.php';
class Toy extends Product{
    public $material;

    function __construct($material)
    {
        $this->material = $material;
    }
}
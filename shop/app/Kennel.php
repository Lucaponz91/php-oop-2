<?php
include_once __DIR__ . '/Product.php';
class Kennel extends Product{
    public $size;

    function __construct($size)
    {
        $this->size = $size;
    }
}
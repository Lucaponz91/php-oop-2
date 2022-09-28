<?php
include_once __DIR__ . '/Product.php';
class PetFood extends Product{
    public $mainIngredient;
    public $flavour;

    function __construct($name, $price, $brand, $categories, $quantity, $mainIngredient, $flavour)
    {
        parent::__construct($name, $price, $brand, $categories, $quantity);
        $this->mainIngredient = $mainIngredient;
        $this->flavour = $flavour;
    }

}
<?php
include_once __DIR__ . '/Product.php';
class PetFood extends Product{
    public $mainIngredient;
    public $flavour;

    function __construct($mainIngredient, $flavour)
    {
        $this->mainIngredient = $mainIngredient;
        $this->flavour = $flavour;
    }

}
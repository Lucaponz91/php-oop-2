<?php
include_once __DIR__ . '/app/PetFood.php';
include_once __DIR__ . '/app/Kennel.php';
include_once __DIR__ . '/app/Toy.php';

$data = [
    "name" => "Crocchette di manzo",
    "description" => "Le migliori crocchette sulla piazza",
    "price" => 19.99,
    "weight" => 12,
    "mainIngredient" => "Meat",
    "flavour" => "Ham",
];

$crocchette = new PetFood($data);
var_dump($crocchette);
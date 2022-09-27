<?php
include_once __DIR__ . '/app/PetFood.php';

$data = [
    "name" => "Crocchette di manzo",
    "description" => "Le migliori crocchette sulla piazza",
    "price" => 19.99,
    "weight" => 12,
];

$crocchette = new PetFood($data);
var_dump($crocchette);
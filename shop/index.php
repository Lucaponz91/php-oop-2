<?php
include_once __DIR__ . '/app/PetFood.php';
include_once __DIR__ . '/app/Kennel.php';
include_once __DIR__ . '/app/Toy.php';

// $data = [
//     "name" => "Crocchette di manzo",
//     "description" => "Le migliori crocchette sulla piazza",
//     "price" => 19,
//     "weight" => 12,
//     "quantity"=> 2,
// ];

$crocchette = new PetFood('Crocchette di manzo','19', 'Monge', 'food', 2, 'meat', 'ham');
var_dump($crocchette);
$crocchette-> setPrice();
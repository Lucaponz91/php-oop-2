<?php
include_once __DIR__ . '/classes/Kennel.php';
include_once __DIR__ . '/classes/PetFood.php';
include_once __DIR__ . '/classes/Product.php';
include_once __DIR__ . '/classes/Toy.php';

$cart = [
    new PetFood('Crocchette di manzo', 19, 'Monge', 'food', 2, 'meat', 'ham'),
    new Toy('Orsetto', 7, 'Animal &Co', 'toy', 1, 'rubber'),
    new Kennel('Cuccia King Size', 30, 'Animalando', 'doghouse', 1,'King-Size')
];


$total = 0;
foreach($cart as $key=>$value){
    if(!empty($value->price) || $value->quantity != 0)
       $total += ($value->price * $value->quantity);
       var_dump($total);
}

?>
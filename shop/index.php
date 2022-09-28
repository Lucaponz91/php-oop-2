<?php
include_once __DIR__ . '/app/PetFood.php';
include_once __DIR__ . '/app/Kennel.php';
include_once __DIR__ . '/app/Toy.php';
include_once __DIR__ . '/Cart.php';

// $data = [
//     "name" => "Crocchette di manzo",
//     "description" => "Le migliori crocchette sulla piazza",
//     "price" => 19,
//     "weight" => 12,
//     "quantity"=> 2,
// ];

$crocchette = new PetFood('Crocchette di manzo', 19, 'Monge', 'food', 2, 'meat', 'ham');
var_dump($crocchette);
$pupazzo = new Toy('Orsetto', 7, 'Animal &Co', 'toy', 1, 'rubber');
$cuccia = new Kennel('Cuccia King Size', 30, 'Animalando', 'doghouse', 1,'King-Size');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolanimals</title>
</head>
<body>
<?=
 "Hai inserito nel carrello " . $crocchette-> quantity . " " . $crocchette->name . " . Il subtotale è di "  ?> <?= $crocchette->setPrice() . " euro. <br>"
?>
<?=
 " Hai inserito nel carrello " . $pupazzo-> quantity . " " . $pupazzo->name . " . Il subtotale è di "  ?> <?= $pupazzo-> setPrice() . " euro. <br>"
?>
<?=
 " Hai inserito nel carrello " . $cuccia-> quantity . " " . $cuccia->name . " . Il subtotale è di "  ?> <?= $cuccia-> setPrice() . " euro. <br>"
?>

<?= "Il totale è di $total euro." 
?>
    
</body>
</html>

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

// $crocchette = new PetFood('Crocchette di manzo', 19, 'Monge', 'food', 2, 'meat', 'ham');
// var_dump($crocchette);
// $pupazzo = new Toy('Orsetto', 7, 'Animal &Co', 'toy', 1, 'rubber');
// $cuccia = new Kennel('Cuccia King Size', 30, 'Animalando', 'doghouse', 1,'King-Size');

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

    <h1>Il tuo Carrello:</h1>
    <ul>
          <?php foreach($cart as $key=>$value){
            echo "<li> Hai inserito nel carrello " . $value-> quantity . " " . $value->name . " . Il subtotale è di "  ?> 
            <?php 
            try{ 
                echo $value->setPrice();
            } catch(Exception $e) {
                var_dump($e);
            }?>
             <?=  " euro. </li><br>";

        }?>
            
            <h3>Il totale da saldare è di <?= $total ?> euro</h3>

        
    </ul>

</body>
</html>

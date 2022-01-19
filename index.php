<?php

use FFI\Exception;

require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/PrimeUser.php';
require_once __DIR__ . '/classes/User.php';

$new_user = new User('Mattia', 'Giacomoni');
$new_user->street = 'Via XX Settembre';
$new_user->town = 'Rome';
$new_user->country = 'Italy';
var_dump($new_user);

$new_product = new Product('PS5', 499.90);
//var_dump($new_product);

$new_primeUser = new PrimeUser('Valentina', 'Locci');
//var_dump($new_primeUser);

$new_user->setPurchased($new_product);
$new_primeUser->setPurchased($new_product);


$new_user->setCard(123456789122, 479, 'Mattia Giacomoni', 07, 2024);
$new_primeUser->setCard(123456789123, 468, 'Valentina Locci', 03, 2026);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Ciao <?php  echo "{$new_user->getFirstname()} {$new_user->getLastname()}"; ?></h2>
  <h3>Riepilogo ordine:</h3>
  <h5>Hai acquistato: <?php echo $new_product->getTitle()?> per <?php echo $new_user->getDiscountedPrice()?> €</h5>
  <h5>Con lo sconto del : <?php echo $new_user->getDiscountPrime(); ?> %</h5>
  <h4>Con la carta: <?php echo $new_user->getCard() ?></h4>
  <h5>Indirizzo spedizione: <?php echo $new_user->getAddress(); ?></h5>

  <h2>Ciao <?php  echo "{$new_primeUser->getFirstname()} {$new_primeUser->getLastname()}"; ?></h2>
  <h3>Riepilogo ordine:</h3>
  <h5>Hai acquistato: <?php echo $new_product->getTitle()?> per <?php echo $new_primeUser->getDiscountedPrice()?> €</h5>
  <h5>Con lo sconto del : <?php echo $new_primeUser->getDiscountPrime(); ?> %</h5>
  <h4>Con la carta: <?php echo $new_primeUser->getCard() ?></h4>
</body>
</html>
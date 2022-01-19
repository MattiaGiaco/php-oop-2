<?php

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/PrimeUser.php';
require_once __DIR__ . '/classes/Card.php';

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

$new_creditCard = new Card(345700034534, 479);
$new_creditCard2 = new Card(123000074943, 468);

$new_user->setCard($new_creditCard);
$new_primeUser->setCard($new_creditCard2);

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
  <h4>Con la carta: <?php echo $new_user->getCard()->getCardNumber() ?></h4>
  <h5>Indirizzo spedizione: <?php echo $new_user->getAddress(); ?></h5>

  <h2>Ciao <?php  echo "{$new_primeUser->getFirstname()} {$new_primeUser->getLastname()}"; ?></h2>
  <h3>Riepilogo ordine:</h3>
  <h5>Hai acquistato: <?php echo $new_product->getTitle()?> per <?php echo $new_primeUser->getDiscountedPrice()?> €</h5>
  <h5>Con lo sconto del : <?php echo $new_primeUser->getDiscountPrime(); ?> %</h5>
  <h4>Con la carta: <?php echo $new_primeUser->getCard()->getCardNumber() ?></h4>
</body>
</html>
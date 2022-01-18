<?php

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/PrimeUser.php';

$new_user = new User('Mattia', 'Giacomoni');
var_dump($new_user);

$new_product = new Product('PS5', 499.90);
   var_dump($new_product);

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
  <h5>Hai acquistato: <?php echo $new_product->getTitle()?> per <?php echo number_format($new_product->getPrice(), 2, ",", "") ?>€</h5>
</body>
</html>
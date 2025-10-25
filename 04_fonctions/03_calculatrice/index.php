<?php
// ⬇ une fonction "sum()" qui prendra deux nombres en paramètres et calculera leur somme

// ⬇ une fonction "subtract()" qui prendra aussi deux nombres en paramètres et calculera leur soustraction

// ⬇ une fonction "product()" qui prendra encore deux nombres en paramètres et calculera leur produit (multiplication)

// ⬇ une fonction "divide()" qui prendra toujours deux nombres en paramètres et calculera leur division

// ⬇ ne modifiez pas le code ci-dessous
$cost = sum(2, 5);
echo $cost . "\n"; // doit afficher 7

$quantity = product($cost, 3);
echo $quantity . "\n"; // doit afficher 21

$discount = subtract($quantity, 5);
echo $discount . "\n"; // doit afficher 16

$share = divide($discount, 4);
echo $share . "\n"; // doit afficher 4
?>

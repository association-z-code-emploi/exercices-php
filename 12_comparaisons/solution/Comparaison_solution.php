<?php
$a = 42;
$b = "42";

var_dump($a == $b);  // true (valeurs similaires)
var_dump($a === $b); // false (types des valeurs différents)
var_dump($a != $b);  // false (valeurs similaires)
var_dump($a !== $b); // true (types des valeurs différents)
?>

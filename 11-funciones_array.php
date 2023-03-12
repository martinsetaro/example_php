<?php

// buscar elementos en un arreglo
// in-array

$carrito = ["tablet","computadora","television"];

var_dump( in_array("tablet", $carrito ));  

// ordenar elementos de un arreglo

$numeros = array(1,5,4,7,2,9,8,6,3);

sort($numeros);// de menor a mayor.
rsort($numeros);// de mayor a menor.

echo "<pre>";
var_dump($numeros);
echo "</pre>";


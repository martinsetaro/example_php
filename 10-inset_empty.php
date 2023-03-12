<?php

$clientes=[];
$clientes2=array();
$clientes3=array("Pedro","Juan","Karen");


// empty : revisa si un array esta vacio

var_dump( empty($clientes));
echo "</br>";

// isset : revisa si un arreglo esta creado o una propiedad definida

$clienteNuevo = [
    "nombre" => "martin",
    "saldo" => 3000
]; 

var_dump(isset($clientes));
echo "</br>";
var_dump( isset($clienteNuevo["dni"]));

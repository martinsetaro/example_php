<?php

//associative array

$cliente=array(
    "nombre" => "Martin",
    "tipoCliente" => "premiun",
    "saldo" => 50000,
    "banco" => [
        "nombre" => "supervielle"
    ]
);

$cliente["dni"] = 29014907;

echo "<pre>";
var_dump ($cliente);
echo "</pre>";
echo "<br/>";
echo "El informe generado para el dni n° {$cliente["dni"]} es el siguiente :";
echo "<br/>";
echo "El cliente {$cliente["nombre"]}";
echo "<br/>";
echo "Posee una cuente tipo {$cliente["tipoCliente"]}";
echo "<br/>";
echo " Con un saldo actualizado de : $ {$cliente["saldo"]}";
echo "<br/>";
echo " Laa cuenta esta habilitada en el banco : {$cliente["banco"]["nombre"]}";
echo "<br/>";
<?php
declare(strict_types=1);
require ('pruebaFunction.php');

$productos = array(
    [
        "nombre" => "tablet",
        "precio" => 300,
        "stock" => true
    ],
    [
        "nombre" => "monitor curvo",
        "precio" => 400,
        "stock" => true
    ],
    [
        "nombre" => "monitor gamer",
        "precio" => 500,
        "stock" => true
    ],
    [
        "nombre" => "auriculares bluetooth",
        "precio" => 200,
        "stock" => false
    ],
    [
        "nombre" => "teclado gamer",
        "precio" => 150,
        "stock" => true
    ],
);

echo "</br>";
echo "<pre>";
var_dump($productos);
echo "</pre>";

foreach ($productos as $producto) { ?>

<li><p>Producto : <?php echo $producto["nombre"] ; ?></p></li>
<li><p>precio : <?php echo $producto["precio"];  ?></p></li>
<li><p>disponibilidad : <?php echo ($producto["stock"] ? "Disponible" : "No Disponible");  ?></p></li>

<?php

}

sumar(300,400);

function usuarioAutenticado() : string {
    return "El usuario está correctamente autenticado";
}

$usuario = usuarioAutenticado();
echo $usuario;



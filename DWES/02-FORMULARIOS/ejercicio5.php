<?php

$productos = array(
    array(
        "nombre" => "Logitech K120",
        "descripcion" => "Teclado multimedia USB plug&play",
        "precio" => 25.99
    ),
    array(
        "nombre" => "Lenovo L15",
        "descripcion" => "Mouse Lenovo 300 compacto inalámbrico",
        "precio" => 12.99
    ),
    array(
        "nombre" => "Monitor LG X10",
        "descripcion" => "Monitor LED de 17 pulgadas",
        "precio" => 179.99
    ),
    array(
        "nombre" => "Monitor Lenovo Q24i",
        "descripcion" => "Pantalla de 23,8 pulgadas",
        "precio" => 172
    ),
    array(
        "nombre" => "ThinkPad X1 Extreme",
        "descripcion" => "Portátil ThinkPad X1 Extreme",
        "precio" => 1200
    )
);

if (isset($_POST["cantidad"])) {

    $cantidades = $_POST["cantidad"];

    $total = 0;

    foreach ($productos as $indice => $producto) {

        $cantidad = $cantidades[$indice];

        $total = $total + ($producto["precio"] * $cantidad);
    }

    echo "El precio total es: " . $total . " €";

} else {

    require "ejercicio5.view.php";

}

?>
<?php

session_start();

// Guardar el idioma seleccionado
if (isset($_POST["idioma"])) {
    setcookie("idioma", $_POST["idioma"], time() + 86400 * 30);
}

// Obtener el idioma guardado
$idioma = "";

if (isset($_COOKIE["idioma"])) {
    $idioma = $_COOKIE["idioma"];
}

// Productos de la tienda
$productos = [
    1 => [
        "nombre" => "Logitech K120",
        "descripcion" => "Teclado multimedia USB plug&play, trackPoint Caps (10pk, Soft Dome)",
        "precio" => 25.99
    ],
    2 => [
        "nombre" => "Lenovo LI5",
        "descripcion" => "El mouse Lenovo 300 compacto inalámbrico es el accesorio perfecto para cualquier persona que desee un mayor control y libertad",
        "precio" => 12.99
    ],
    3 => [
        "nombre" => "Monitor LG X10",
        "descripcion" => "LCD con retroiluminación LED ThinkVision T1714p Square de 17 pulgadas",
        "precio" => 179.99
    ],
    4 => [
        "nombre" => "Monitor Lenovo Q24i",
        "descripcion" => "Pantalla de 60,45 cm (23,8\") Funciones como AMD FreeSync",
        "precio" => 172
    ],
    5 => [
        "nombre" => "ThinkPad X1 Extreme",
        "descripcion" => "ThinkPad X1 Extreme de 2.ª generación gestiona exigentes tareas informáticas sin problemas. Con pantalla táctil 4K OLED",
        "precio" => 1200
    ]
];


// Creamos la cesta si todavía no existe
if (!isset($_SESSION["cesta"])) {
    $_SESSION["cesta"] = [];
}


// Añadir producto a la cesta
if (isset($_GET["id"])) {

    $id = $_GET["id"];

    if (isset($productos[$id])) {
        $_SESSION["cesta"][] = $productos[$id];
    }
}


// Realizar compra
if (isset($_POST["comprar"])) {
    $_SESSION["cesta"] = [];
}


// Calculamos el precio total
$total = 0;

foreach ($_SESSION["cesta"] as $producto) {
    $total += $producto["precio"];
}

require "ejercicio8.view.php";

?>
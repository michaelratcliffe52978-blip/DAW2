<?php 
//GUARDAR COOKIE
    if(isset($_POST["guardar"])) {
        $usuario = $_POST["usuario"];

        setcookie("usuario", $usuario);
    }

//BORRAR COOKIE
    if(isset($_POST["borrar"])) {
        setcookie("usuario", NULL, -1);
    }

//MOSTRAR LA COOKIE SI EXISTE
    $resultado = $_COOKIE["usuario"] ?? null;

    require "ejercicio2.view.php";
?>  
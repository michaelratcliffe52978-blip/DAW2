<?php 

    if(isset($_POST["guardar"])){
        $usuario = $_POST["usuario"];

        setcookie("usuario", $usuario);
    }
    $resultado = $_COOKIE["usuario"] ?? null;

    require "ejercicio1.view.php";
?>  
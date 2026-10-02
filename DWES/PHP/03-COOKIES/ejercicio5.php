<?php

session_start();

$usuarios = array(
    "user1" => "123Abc",
    "user2" => "456Xyz"
);

if (isset($_GET["cerrar"])) {

    session_destroy();

} elseif (isset($_POST["usuario"]) && isset($_POST["password"])) {

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    if (isset($usuarios[$usuario]) && $usuarios[$usuario] == $password) {

        $_SESSION["usuario"] = $usuario;

    } else {

        $error = "Usuario o contraseña incorrectos.";

    }
}

require "ejercicio5.view.php";
?>
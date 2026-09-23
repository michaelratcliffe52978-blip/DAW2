<?php  
    $usuarios = array(
        "user1" => array (
            "nombre" => 'Ane',
            "apellidos" => 'López',
            "contra" => '123Abc'
        ),
        "user2" => array (
            "nombre" => 'Amaia',
            "apellidos" => 'Otsoa',
            "contra" => '456Xyz'
        )
    );

    if (isset($_POST["usuario"]) && isset($_POST["contra"])) {

        $usuario = $_POST["usuario"];
        $password = $_POST["contra"];

        if (!isset($usuarios[$usuario])) {

            echo "El usuario no existe.";

        } elseif ($usuarios[$usuario]["contra"] != $password) {

            echo "La contraseña es incorrecta.";

        } else {

            echo "Bienvenido " . $usuarios[$usuario]["nombre"] . " " . $usuarios[$usuario]["apellidos"];

        }
}

    require "ejercicio4.view.php"; 
?>
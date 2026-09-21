<?php 
    $diccionario = array(
        "Usuario1" => [
            "nombre" => "Maria",
            "apellidos" => "Unzueta Pintor",
            "email" => "munzupint@gmail.com"
        ],
        "Usuario2" => [
            "nombre" => "Mikel",
            "apellidos" => "Zambrano Castillo",
            "email" => "mzambracast@gmail.com"
        ],
        "Usuario3" => [
            "nombre" => "Laura",
            "apellidos" => "Lopez Sugar",
            "email" => "llpopezsugar@gmail.com"
        ],
        );

    function getDatos($diccionario, $usuario, $dato){
        return $diccionario[$usuario][$dato];
    }


    require "ejercicio15.view.php";
?>

<?php 
    
    $user = $_GET['usuario'];
    $password = $_GET['contraseña']<s;

    $usuarios = [
        "user1" => [
            "nombre" => "Nora",
            "password" => "123123",
            "email" => "nora@php.net"
            ],

        "user2"=> [
            "nombre" => "Mikel",
            "password" => "000000"
            "email" => "mikel@php.net"
        ]
    ];

    function existe($user, $password, $usuarios){
        if(array_key_exists($user,$usuarios)) {
            return "Usuario encontrado correctamente";

            if(array_key_exists($password == $usuarios[$user][$password])){
                    return "La contraseña es correcta"
                }else{
                    return "La contraseña no es correcta"
                }
        }else{
            return "Usuario no encontrado";
        }
    }

    require "ejercicio17.view.php";
?>

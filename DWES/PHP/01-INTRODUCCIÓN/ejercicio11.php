<?php 

    function concatenar($a,$b = "anonimo"){
        return $a. ' '.$b;
    }

    $textoA= $_GET['textoA'] ?? "Primer texto";
    $textoB= $_GET['textoB'] ?? "Segundo Texto";
    $frase=concatenar($textoA,$textoB);


    require "ejercicio11.view.php"
?>

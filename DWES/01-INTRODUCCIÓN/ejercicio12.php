<?php 
    $ciudades= array('Paris','Berlin','Amsterdam','Praga'); 

    $numero = $_GET['numero'];
    $nuevoNumero = $_GET['valor'];


    function getValor($ciudades,$numero){
            return $ciudades($numero);
        }
    
    $resultado = getValor($ciudades,$numero);

    function setValor($ciudades,$numero,$nuevoNumero){
        $ciudades[$numero]=$nuevoNumero   
        return $numero;
        }
        

    require "ejercicio12.view.php";
?>

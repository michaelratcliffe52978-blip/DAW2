<?php 
    $animales= array('Perro','Gato','Loro','Toro'); 
    $colores = array('Rojo', 'Azul', 'Verde', 'Amarillo');

    //Calcular el número de elementos de cada array: count()
    $sizeAnimales = count($animales);
    $sizeColores = count($colores);

    //Añadir un elemento al FINAL: array_push()
    array_push($animales, 'Caballo');

    //Añadir un elemento al PRINCIPIO: array_unshift()
    array_unshift($colores, 'Blanco');

    //Crear un tercer array con la unión de ambos
    $todoJunto = array_merge($animales, $colores);
    
    require "ejercicio13.view.php";
?>

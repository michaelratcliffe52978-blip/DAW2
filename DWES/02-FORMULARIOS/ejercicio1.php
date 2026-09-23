<?php 


    function convertirTemperatura(float $temperatura, string $unidad): float{
        if($unidad == 'celsius') {
            $conversion = 1.8 * $temperatura + 32;
        }else{
            $conversion = ($temperatura - 32) /1.8;
        }
        return round($conversion,2);
    }

    if (isset($_GET["temperatura"]) && isset($_GET["type"])) {
        $temperatura = (float) $_GET["temperatura"];
        $unidad = $_GET["type"];
        
        //Llamo a la función convertirTemperatura, le paso temperatura y unidad, y guardo lo que me devuelva en $resultado
        $resultado = convertirTemperatura($temperatura, $unidad);
    }


    require "ejercicio1.view.php";
?>
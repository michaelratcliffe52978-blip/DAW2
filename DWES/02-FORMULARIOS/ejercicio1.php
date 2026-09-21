<?php 


    function convertirTemperatura(int $temperatura, string $unidad): float{
        if($unidad == 'Celsius') {
            $conversion = 1.8 * $temperatura + 32:
        }else{
            $conversion = ($temperatura - 32) /1.8;
        }
        return round($conversion,2);
    }


    require "ejercicio1.view.php";
?>
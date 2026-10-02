<?php 
    
    $pais = $_GET['pais'];

    $paises = array('Brasil', 'Portugal', 'Islandia', 'Mexico', 'Filipinas', 'Marruecos');

    function encontrar($paises,$pais){
        
        for($i=0,$i<=count($paises); $i++){
            if($paises==$i){
                return $paises
            }else{
                return "-1";
            }


        }
        return $resultado;
    }



    require "ejercicio22.view.php";
?>

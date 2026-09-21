<?php 
    function esPar($numero){
        if($numero%2 == 0)
            return true;
        return false;
    }

    function sumar($numero, $limite){
        $resultado =0;
        for($i=0,$i<=$numero; $i++){
            if(!esPar($i)) 
                continue;
            if(($resultado+$i)>$limite)
                return $resultado;
            $resultado += $i;

        }
        return $resultado;
    }
    require "ejercicio21.view.php";
?>

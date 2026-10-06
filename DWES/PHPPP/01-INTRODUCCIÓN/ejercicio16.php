<?php 
    
    $n1 = $_GET['n1'] ?? 0;
    $n2 = $_GET['n2'] ?? 0;

    function operacion($n1, $n2){
       //Si los números son distintos, mostrará el resultado de su suma. 
       //Si los números son iguales, mostrará el resultado de su multiplicación.
        if($n1==$n2) {
            return $n1 * $n2;
        }else{
            return $a + $b;
        }
       
        $resultado = operacion($n1, $n2);
    }
   
    require "ejercicio16.view.php";
?>

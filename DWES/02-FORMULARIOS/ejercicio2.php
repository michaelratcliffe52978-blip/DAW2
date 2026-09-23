<?php  
    function sumar(int $num1, int $num2): int { 
        return $num1 + $num2; 
    } 
 
    function restar(int $num1, int $num2): int { 
        return $num1 - $num2; 
    } 
 
    function multiplicar(int $num1, int $num2): int { 
        return $num1 * $num2; 
    } 
 
    function dividir(int $num1, int $num2): float { 
        return $num1 / $num2; 
    } 
 
    //Si existen los tres datos que vienen del formulario, haz lo siguiente
    if (isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["type"])) {

    $num1 = (int) $_GET["num1"];
    $num2 = (int) $_GET["num2"];
    $operacion = $_GET["type"];

    switch ($operacion) {
        case "suma":
            //Llamo a la función sumar, le paso num1 y num2, y guardo lo que me devuelva en $resultado
            $resultado = sumar($num1, $num2);
            break;

        case "resta":
            $resultado = restar($num1, $num2);
            break;

        case "multiplicación":
            $resultado = multiplicar($num1, $num2);
            break;

        case "división":
            if ($num2 == 0) {
                $resultado = "Error: no se puede dividir entre cero.";
            } else {
                $resultado = dividir($num1, $num2);
            }
            break;
    }
}
    require "ejercicio2.view.php"; 
?>
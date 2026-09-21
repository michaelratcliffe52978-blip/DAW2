<!DOCTYPE html>
<html lang="es">
    <head>
        <title>PHP EJERCICIO 6</title>
    </head>
    <body>
        <?php 
        $a= $_GET['a'];
        $b= $_GET['b'];

        function multiplicar ($a,$b){
            $resultado = $a * $b;
            echo "<p>Resultado de $a x $b = {$resultado}</p>";
        }

        /* MANERA MEJORADA (SACANDO EL ECHO) 9*/
        function multiplicar($a,$b){
            return $a * $b;
        }
            $multiplicar=mayorque($a,$b);
            echo "<p>A x B: {$multiplicar}</p>";

        ?>
    </body>
</html>
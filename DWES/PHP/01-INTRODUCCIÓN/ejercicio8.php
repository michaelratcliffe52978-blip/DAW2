<!DOCTYPE html>
<html lang="es">
    <head>
        <title>PHP EJERCICIO 8</title>
    </head>
    <body>
        <?php 
        $n1= $_GET['numero1'];
        $n2= $_GET['numero2'];

        function esMayor($n1,$n2){
            return $n1 > $n2;
        }

            $resultado=esMayor($n1,$n2);

            echo "<p>¿$n1 ES MAYOR QUE $n2?: ";
            var_export($resultado);
            echo "</p>";

       
        ?>
    </body>
</html>
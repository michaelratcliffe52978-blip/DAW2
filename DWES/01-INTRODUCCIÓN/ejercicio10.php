<!DOCTYPE html>
<html lang="es">
    <head>
        <title>PHP EJERCICIO 9</title>
    </head>
    <body>
        <?php 

        function concatenar($a,$b = "anonimo"){
            return $a.$b;
        }

        $textoA= $_GET['textoA'] ?? "Primer texto"; /*LA "??" ES COMO SI FUESE UN IF, if*/
        $textoB= $_GET['textoB'] ?? "Segundo Texto";
        $frase=concatenar($textoA,$textoB);

        echo "<p>FRASE: = $frase </p>";

        ?>
</body>
</html>
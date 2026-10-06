<!DOCTYPE html>
<html lang="es">
    <head>
        <title>PHP EJERCICIO 5</title>
    </head>
    <body>
        <?php 
        $a= $_GET['respuestaA'];
        $b= $_GET['respuestaB'];

        function resta($a,$b){
            return $a - $b;
        }
            $resta=resta($a,$b);
            echo "<p>RESTA DE A y B: {$resta}</p>";


        function division($a,$b){
            return $a / $b;
        }
            $division=division($a,$b);
            echo "<p>DIVISIÓN DE A y B: {$division}</p>";


        function mayorque($a,$b){
            return $a > $b;
        }
            $mayorque=mayorque($a,$b);
            echo "A > B:";
            var_export($mayorque);
 

        function menorigual($a,$b){
            return $a - $b;
        }
            $menorigualque=menorigual($a,$b);
            echo "<br><br>A <= B:";
            var_export($menorigualque);

        ?>
    </body>
</html>
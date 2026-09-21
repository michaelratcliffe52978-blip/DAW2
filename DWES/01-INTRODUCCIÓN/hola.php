<!DOCTYPE html>
<html lang="es">
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php echo '<p>Hello World</p>';?>

        <?php
            $nombre="Mikel";
            $edad= 22;

            echo $nombre;
            echo $edad;

        ?>
        <?= /* Imprime directamente */
            $nombre
        ?>

        <?php 
        /*DIFERENTES MANERAS DE CONCATENACIÓN: */
        echo "Mi amigo " . $nombre . " tiene " . $edad . " años. <br>";
        echo "Mi amigo {$nombre} tiene {$edad} años. ";

        ?>

        
    </body>
</html>
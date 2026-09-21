<!DOCTYPE html>
<html lang="es">
    <head>
        <title>PHP EJERCICIO 4</title>
    </head>
    <body>
        <?php 
        $nombre= $_GET['usuario'];
        $edad= $_GET['edad'];

        echo "Mi amigo {$nombre} tiene {$edad} años. ";
        ?>
    </body>
</html>
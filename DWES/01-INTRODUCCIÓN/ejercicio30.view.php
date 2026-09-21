<!DOCTYPE html>
<html lang="es">
    <head>
        <title>PHP EJERCICIO 30</title>
    </head>
    <body>
        <?php foreach ($estudiantes as $key => $value): ?>
            <li>        
                <?= "La nota media de {$key} es {$value} </br>"?>
            </li>
        <?php endforeach; ?> 
    </body>
</html>
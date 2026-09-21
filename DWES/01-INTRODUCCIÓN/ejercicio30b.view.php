<!DOCTYPE html>
<html lang="es">
    <head>
        <title>PHP EJERCICIO 30</title>
    </head>
    <body>
        <?php foreach ($estudiantes as $value): ?>
            <ul>
                <li>        
                    <?= "La nota media de {$value['nombre']} es {$value['nota']} "?>
                </li>
            </ul>
        <?php endforeach; ?> 
    </body>
</html>
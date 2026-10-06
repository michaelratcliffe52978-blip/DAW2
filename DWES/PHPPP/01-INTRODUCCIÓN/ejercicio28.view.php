<!DOCTYPE html>
<html lang="es">
    <head>
        <title>PHP EJERCICIO 28</title>
    </head>
    <body>
        <?php foreach ($coches as $coche): ?>
            <ul>
                <li>        
                    <?= $coche ?>
                </li>
            </ul>
        <?php endforeach; ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>PHP EJERCICIO 27</title>
    </head>
    <body>
        <?php foreach ($grupos as $grupo): ?>
                <li>        
                    <?= "GRUPO: {$grupo}"?>
                </li>
        <?php endforeach; ?>
    </body>
</html>
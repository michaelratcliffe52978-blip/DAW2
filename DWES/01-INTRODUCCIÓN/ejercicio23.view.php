<!DOCTYPE html>
<html lang="es">
    <head>
        <title>PHP EJERCICIO 23</title>
    </head>
    <body>

            <?= for($i=0, $i<=count($estudiantes); $i++) { ?>
            <li>
                <?=$estudiantes[$i] ?>
            </li>
            <?=} ?>
        </ul>

        <ul>
            <?= for($i=0, $i<=count($estudiantes); $i++): ?>
            <li>El estudiante es: 
                <?=$estudiantes[$i] ?>
            </li>
            <?= endfor; ?>
        </ul>


        
    </body>
</html>
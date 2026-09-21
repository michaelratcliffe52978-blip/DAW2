<!DOCTYPE html>
<html lang="es">
    <head>
        <title>PHP EJERCICIO 29</title>
    </head>
    <body>
        <?php foreach ($agenda as $grupo): ?>
            <table border="1">
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Email</th>


            </table>
            <tr>
                <td><?= $elemento ["nomobre"]?></td>
            <li>        
                    <?= "GRUPO: {$grupo}"?>
                </li>
        <?php endforeach; ?>

    </body>
</html>
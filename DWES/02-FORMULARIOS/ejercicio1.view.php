<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 1</title>
</head>
<body>
    <!-- Si el usuario ha intentado convertir un número mostramos el mensaje -->
    <?php if(isset($resultado)): ?>
        <p>
            <b>Resultado de la conversión (<?= $unidad ?>): <?= $resultado ?></b>
        </p>    
    <?php endif; ?>

    <!-- Formulario para que el usuario introduzca los datos -->
    <form action="ejercicio1.php" method="GET">
        <p>
            <label for="temperatura">Introduce la temperatura: </label>
            <input type="number" id="temperatura" name="temperatura" required>
        </p>
        <p>
            <label for="unidad">Indica la unidad de la temperatura introducida: </label>
            <select id="tipo" name="type" size="1">
                <option value="" disabled selected>--Selecciona--</option>
                <option value="celsius">Celsius</option>
                <option value="fahrenheit">Farenheit</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>
</body>
</html>
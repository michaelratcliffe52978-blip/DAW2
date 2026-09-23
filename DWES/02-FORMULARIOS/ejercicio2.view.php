<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 2</title>
</head>
<body>
    <h3>Calculadora</h3>

    <form action="ejercicio2.php" method="GET">
        <p>
            <label for="lastresult">Último resultado: <?= $resultado ?? "" ?></label>
        </p>
        <p>
            <label for="num1">Primer número: </label>
            <input type="number" id="num1" name="num1" required>
        </p>
        <p>
            <label for="num2">Segundo número: </label>
            <input type="number" id="num2" name="num2" required>
        </p>
        <p>
            <label for="operacion">Seleccione la operación deseada: </label>
            <select id="tipo" name="type" size="1">
                <option value="" disabled selected>--Selecciona--</option>
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicación">Multiplicación</option>
                <option value="división">División</option>

            </select>
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 3</title>
</head>
<body>
    <h3>FORULARIO DE CONTACTO</h3>

    <form action="ejercicio3.php" method="POST">
        <p>
            <label for="temperatura"> <?= $resultado ?? "No hay ningún usuario almacenado" ?></label>
        </p>
        <p>
            <label for="idioma">Elige tu idioma</label>
            <select id="tipo" name="type" size="1">
                <option value="" disabled selected>--Selecciona--</option>
                <option value="eus">Euskera</option>
                <option value="es">Castellano</option>

            </select>
        </p>
        <p>
            <input type="submit" value="Guardar" name="guardar">
        </p>
    </form>
</body>
</html>
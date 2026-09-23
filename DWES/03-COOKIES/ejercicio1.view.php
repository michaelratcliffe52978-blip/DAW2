<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 1</title>
</head>
<body>
    <form action="ejercicio1.php" method="POST">
        <p>
            <label for="temperatura"> <?= $resultado ?? "No hay ningún usuario almacenado" ?></label>
        </p>
        <p>
            <label for="unidad">Introduce el texto que deseas almacenar: </label>
            <input type="text" value="" name="usuario">
            <input type="submit" value="Guardar" name="guardar">

        </p>
    </form>
</body>
</html>
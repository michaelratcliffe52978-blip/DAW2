<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 4</title>
</head>
<body>
    <h3>Lista de asistentes</h3>

    <form action="ejercicio4.php" method="POST">
        <ul>
            <li for="lista"> <?= $resultado ?? "LISTA VACÍA" ?></li>
        </ul>
        <p>
            <b>Añadir asistente</b><br> 
            <input type="text" id="textoAñadir" name="usuario" required>
            <input type="submit" value="Añadir" name="añadir">
        </p>
       <a href="">Vaciar lista</a>
    </form>
</body>
</html>
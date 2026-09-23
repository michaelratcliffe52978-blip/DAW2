<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 4</title>
</head>
<body>
    <h3>INICIO DE SESIÓN</h3>

    <form action="ejercicio4.php" method="POST">
        <p>
            <label for="usuario">Usuario: </label><br>
            <input type="text" id="usuario" name="usuario" required>
        </p>
        <p>
            <label for="contra">Constraseña: </label><br>
            <input type="password" id="contra" name="contra" required>
        </p>
        <p>
            <input type="submit" value="Iniciar sesión">
        </p>
    </form>
</body>
</html>
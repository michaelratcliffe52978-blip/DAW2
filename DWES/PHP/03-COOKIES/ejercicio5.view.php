<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 5</title>
</head>
<body> 
    <?php if (isset($_SESSION["usuario"])): ?>

        <h3>Bienvenido <?= $_SESSION["usuario"] ?></h3>

        <a href="ejercicio5.php?cerrar=1">Cerrar sesión</a>

    <?php else: ?>

        <h3>INICIO DE SESIÓN</h3>

        <?php if (isset($error)): ?>
            <p><?= $error ?></p>
        <?php endif; ?>

        <form action="ejercicio5.php" method="POST">

            <p>
                <label for="usuario">Usuario: </label><br>
                <input type="text" id="usuario" name="usuario" required>
            </p>

            <p>
                <label for="password">Contraseña: </label><br>
                <input type="password" id="password" name="password" required>
            </p>

            <p>
                <input type="submit" value="Iniciar sesión">
            </p>

        </form>
    <?php endif; ?>
</body>
</html>
</body>
</html>
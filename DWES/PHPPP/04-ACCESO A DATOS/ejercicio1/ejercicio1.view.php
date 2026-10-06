
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de la compra</title>
</head>
<body>
    
    <h3>Lista de compra</h3>
    <ul>
        <?php foreach ($productos as $producto): ?>
            <li>
                <?= $producto['objeto']?>
                <a href="ejercicio1.php?eliminar=<?= $producto['id'] ?>">
                    Eliminar
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h3>Añadir elemento</h3>
    <form action="ejercicio1.php" method="POST">
        <input type="text" name="elemento">
        <input type="submit" name="añadir" value="Añadir">
    </form>

    <br>

    <a href="ejercicio1.php?vaciar=1">Vaciar lista</a>

</body>
</html>
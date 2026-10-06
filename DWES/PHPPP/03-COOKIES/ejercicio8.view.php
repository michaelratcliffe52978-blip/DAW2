<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Tienda online</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            width: 85%;
            margin: 30px auto;
        }

        h1, h2 {
            color: #222;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            font-weight: bold;
        }

        a {
            color: #4285f4;
            text-decoration: none;
        }

        button {
            background-color: #1473e6;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
<form method="POST">

    <label>Idioma:</label>

    <select name="idioma">
        <option value="es">Español</option>
        <option value="eu">Euskera</option>
    </select>

    <button type="submit">
        Guardar idioma
    </button>

</form>

<?php

if ($idioma == "es") {
    echo "<h2>Bienvenido</h2>";
}

if ($idioma == "eu") {
    echo "<h2>Ongi etorri</h2>";
}

?>

<h2>Cesta de la compra</h2>

<?php if (empty($_SESSION["cesta"])): ?>

    <p>No hay productos en la cesta. Comience a comprar.</p>

<?php else: ?>

    <ul>

        <?php foreach ($_SESSION["cesta"] as $producto): ?>
            <li>
                <?= $producto["nombre"] ?> -
                <?= $producto["precio"] ?> €
            </li>
        <?php endforeach; ?>

    </ul>

    <p>
        <strong>Precio total: <?= $total ?> €</strong>
    </p>

    <form method="POST">

        <button type="submit" name="comprar">
            Realizar Compra
        </button>

    </form>

<?php endif; ?>


<h2>Catálogo de productos</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Cantidad</th>
    </tr>

    <?php foreach ($productos as $id => $producto): ?>

        <tr>

            <td>
                <?= $id ?>
            </td>

            <td>
                <?= $producto["nombre"] ?>
            </td>

            <td>
                <?= $producto["descripcion"] ?>
            </td>

            <td>
                <?= $producto["precio"] ?> €
            </td>

            <td>
                <a href="ejercicio7.php?id=<?= $id ?>">
                    Comprar
                </a>
            </td>

        </tr>

    <?php endforeach; ?>

</table>

</body>
</html>
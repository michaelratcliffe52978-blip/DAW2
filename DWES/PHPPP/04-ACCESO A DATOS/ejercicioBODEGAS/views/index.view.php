<?php require("views/layout/header.view.php") ?>

<main>
    <input type="submit" value="+ Añadir Bodega">
    <table border=1>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Localización</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($bodegas as $bodega) : ?>
            <tr>
                <td><?= htmlspecialchars($bodega->nombre) ?></td> <!--htmlspecialchars SIRVE PARA QUE EL NAVEGADOR LEA BIEN LOS CARÁCTERES ESPECIALES -->
                <td><?= htmlspecialchars($bodega->direccion) ?></td>
                <td><?= htmlspecialchars($bodega->telefono ?? '') ?></td>
                <td><?= htmlspecialchars($bodega->email ?? '') ?></td>
                <td></td>
            </tr>
            <?php endforeach; ?>

            <?php if (empty($bodegas)) : ?>
                <tr>
                    <td colspan="5" class="text-center text-muted">No hay bodegas registradas</td>
                </tr>
            <?php endif; ?>


        </tbody>
    </table>
</main>

<?php require("views/layout/footer.view.php") ?>


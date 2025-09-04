<?php
session_start();


if (!isset($_SESSION["compras"])) {
    $_SESSION["compras"] = [
        ['producto' => 'manzanas', 'precio' => 1.50, 'cantidad' => 2],
        ['producto' => 'peras', 'precio' => 1.50, 'cantidad' => 2],
        ['producto' => 'platanos', 'precio' => 1.50, 'cantidad' => 2],
        ['producto' => 'sandia', 'precio' => 1.50, 'cantidad' => 2],
    ];
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>

    <? foreach($_SESSION['compras'] as $compra): ?>
        <tr>
            <th></th>
        </tr>
    
    <?php endforeach; ?>

    </tbody>
</table>

</body>

</html>
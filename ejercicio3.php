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
$_SESSION['total'] = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border="1">
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
            <th><?php echo $compra['producto'] ?></th>
            <th><?php echo $compra['precio'] ?></th>
            <th><?php echo $compra['cantidad'] ?></th>
            <th><?php 

            $IVA = 1.13; #iva del 13% pero la multiplico * 1 para sumarle el total de una vez
            $DESCUENTO = 0.05;
            $precio = ($compra['precio'] * $compra['cantidad']) * $IVA; 

            if ($compra['cantidad'] > 5){
                $precio = $precio - ($precio * $DESCUENTO);  
            }

            echo $precio;
            $_SESSION['total'] += $precio;
            
            ?></th>
        </tr>
    
    <?php endforeach; ?>

    </tbody>
</table>

<?php

$costo_envio = 2.99;

if ($compra < 25)
{
        $_SESSION['total']  += $costo_envio;

        echo "EL costo de la compra + costo de envio es igual a $" . $_SESSION['total'];
}
else{
    echo "EL costo de la compra es igual a $" . $_SESSION['total'] ;
}
?>

<form action="" method="post">
    <label for="codigo"></label>
    <input type="text" placeholder="INGRESA EL CODIGO DE DESCUENTO" required name="codigo" id="codigo">

</form>

</body>

</html>
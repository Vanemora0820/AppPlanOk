<!DOCTYPE html>
<html>
<head>
    <title>Lista de cotizaciones</title>
    <link rel="stylesheet" href="../Util/css/styles.css">
</head>
<?php
require_once('../Controller/QuoteController.php');

$datos = new QuoteController();
$result = $datos->getQuotes();
include 'home.php'; ;
?>
<body>
    <h1>Lista de cotizaciones</h1>
    <br>
    <p> Lista de cotizaciones con su id, rut cliente, subtotal, descuento y total</p>
    <br>
    

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>RUT Cliente</th>
                <th>Subtotal</th>
                <th>Descuento</th>
                <th>Total</th>
                <th>Detalle</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $quote): ?>
                <tr>
                    <td><?php echo $quote->getId(); ?></td>
                    <td><?php echo $quote->getClient()->getRut(); ?></td>
                    <td><?php echo '$' . $quote->getSubtotal(); ?></td>
                    <td><?php echo $quote->getDiscount(); ?></td>
                    <td><?php echo '$' . $quote->getTotal(); ?></td>
                    <td><a href="quoteDetail.php?id=<?php echo $quote->getId(); ?>">Ver detalle</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
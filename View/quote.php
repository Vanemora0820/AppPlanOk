<!DOCTYPE html>
<html>
<head>
    <title>Lista de cotizaciones</title>
</head>
<?php
require_once('../Controller/QuoteController.php');

$datos = new QuoteController();
$result = $datos->getQuotes();
?>
<body>
    <h1>Lista de cotizaciones</h1>
    <link rel="stylesheet" href="../Util/css/styles.css">

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
                    <td><?php echo $quote->getSubtotal(); ?></td>
                    <td><?php echo $quote->getDiscount(); ?></td>
                    <td><?php echo $quote->getTotal(); ?></td>
                    <td><a href="quoteDetail.php?id=<?php echo $quote->getId(); ?>">Ver detalle</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
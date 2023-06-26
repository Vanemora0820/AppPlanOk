<!DOCTYPE html>
<html>
<head>
    <title>Detalle de Cotización</title>
    <link rel="stylesheet" href="../Util/css/styles.css">
</head>
<?php
require_once('../Controller/QuoteDetailController.php');

$datos = new QuoteDetailController();
$result = mysqli_fetch_array($datos->showQuoteDetail($_GET["id"]));

//print_r($result);
?>
<body>
    <h1>Detalle de Cotización</h1>
    

    <h2>Datos de la Cotización</h2>
    <link rel="stylesheet" href="../Util/css/styles.css">
    <table>
        <tr>
            <th>ID Cotización</th>
            <th>Fecha</th>
            <th>N° Crédito</th>
            <th>Crédito</th>
            <th>Subtotal</th>
            <th>Descuento</th>
            <th>Total</th>
            <th>Estado</th>
        </tr>
        <tr>
            <td><?php echo $result["COTIZACIÓN_ID"]; ?></td>
            <td><?php echo $result["FECHA"]; ?></td>
            <td><?php echo $result["CRÉDITO"]; ?></td>
            <td><?php echo $result["MONTO_CRÉDITO"]; ?></td>
            <td><?php echo $result["SUBTOTAL"]; ?></td>
            <td><?php echo $result["DESCUENTO"]; ?></td>
            <td><?php echo $result["TOTAL"]; ?></td>
            <td><?php echo $result["ESTADO"]; ?></td>
            
        </tr>
    </table>

    <h2>Datos del Cliente</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>RUT</th>
            <th>Correo</th>
            <th>Teléfono</th>
        </tr>
        <tr>
            <td><?php echo $result['NOMBRE_CLIENTE']; ?></td>
            <td><?php echo $result['RUT_CLIENTE']; ?></td>
            <td><?php echo $result['CORREO_CLIENTE']; ?></td>
            <td><?php echo $result['TELEFONO_CLIENTE']; ?></td>
        </tr>
    </table>

    <h2>Productos</h2>
    <table>
        <tr>
            <th>ID Producto</th>
            <th>Código de Producto</th>
            <th>Categoría</th>
            <th>Valor</th>
            <th>Sector</th>
        </tr>
        
            <tr>
                <td><?php echo $result['PRODUCTO_ID']; ?></td>
                <td><?php echo $result['DESCRIPCIÓN_PRODUCTO']; ?></td>
                <td><?php echo $result['TIPO_PRODUCTO']; ?></td>
                <td><?php echo $result['VALOR_PRODUCTO']; ?></td>
                <td><?php echo $result['SECTOR_PRODUCTO']; ?></td>
            </tr>
       
    </table>

    <h2>Usuario que Cotizó</h2>
    <p><?php echo $result['NOMBRE_USUARIO']; ?></p>
</body>
</html>
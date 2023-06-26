<!DOCTYPE html>
<html>
<head>
    <title>Detalle de Cotización</title>
    <link rel="stylesheet" href="../Util/css/styles.css">
</head>
<?php
require_once('../Controller/QuoteDetailController.php');
include 'home.php'; ;

$datos = new QuoteDetailController();
$result = mysqli_fetch_array($datos->showQuoteDetail($_GET["id"]));

//print_r($result);
?>
<body>
    <br>
    <h1>Detalle de Cotización</h1>
    <br>
    <p> cada registro debe mostrar un botón de acción para ver el detalle de la cotización, 
        en este detalle se deben mostrar los datos completos de la cotización en una pantalla,
        esto incluye los datos propios de la cotización, cliente, productos y usuario que cotizó.</p>
    <br>

    <h2>Datos de la Cotización</h2>
    <br>
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
            <td><?php echo "$" .$result["MONTO_CRÉDITO"]; ?></td>
            <td><?php echo "$" .$result["SUBTOTAL"]; ?></td>
            <td><?php echo $result["DESCUENTO"]; ?></td>
            <td><?php echo "$" .$result["TOTAL"]; ?></td>
            <td><?php echo $result["ESTADO"]; ?></td>
            
        </tr>
    </table>
    <br>
    <h2>Datos del Cliente</h2>
    <br>
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
    <br>
    <h2>Productos</h2>
    <br>
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
                <td><?php echo "$" .$result['VALOR_PRODUCTO']; ?></td>
                <td><?php echo $result['SECTOR_PRODUCTO']; ?></td>
            </tr>
       
    </table>
    <br>
    <h2>Usuario que Cotizó</h2>
    <br>
    <p><?php echo $result['NOMBRE_USUARIO']; ?></p>
</body>
</html>
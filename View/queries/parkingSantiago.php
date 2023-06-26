<!DOCTYPE html>
<html>
<head>
    <title>PARKING SANTIAGO</title>
    <link rel="stylesheet" href="../../Util/css/styles.css">
</head>
<?php
require_once('../../Controller/QueriesController.php');

$datos = new QueriesController();
$result =$datos->getParking();



//print_r($result);
?>
<body>
    <h1>PARKING SANTIAGO</h1>
    

    <h2>Listado de clientes que han comprado estacionamientos en Santiago.</h2>
    <link rel="stylesheet" href="../Util/css/styles.css">
    <table>
        <tr>
            <th>ID_COTIZACIÓN</th>
            <th>NOMBRE CLIENTE</th>
            <th>ID_PRODUCTO</th>
            <th>CÓD_PRODUCTO</th>
            <th>ESTADO</th>
            <th>SECTOR_PRODUCTO</th>
            <th>TIPO_PRODUCTO</th>
            
        </tr>
        <?php
        foreach ($result as $row) {
            ?>
        <tr>
            <td><?php echo $row["COTIZACION_ID"]; ?></td>
            <td><?php echo $row["NOMBRE_CLIENTE"]; ?></td>
            <td><?php echo $row["PRODUCTO_ID"]; ?></td>
            <td><?php echo $row["DESCRIPCIÓN_PRODUCTO"]; ?></td>
            <td><?php echo $row["ESTADO"]; ?></td>
            <td><?php echo $row["SECTOR_PRODUCTO"]; ?></td>
            <td><?php echo $row["TIPO_PRODUCTO"]; ?></td>
        </tr>
    <?php
        }
    ?>
    </table>
</body>
</html>
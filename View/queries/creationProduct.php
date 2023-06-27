<!DOCTYPE html>
<html>
<head>
    <title>PRODUCTOS VENDIDOS</title>
    <link rel="stylesheet" href="../../Util/css/styles.css">
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</head>
<?php
require_once('../../Controller/QueriesController.php');

$datos = new QueriesController();
$result=$datos->creationProduct();



//print_r($result);
?>
<body>
<button class="back-button" onclick="goBack()">Atrás</button>
    <h1>PRODUCTOS VENDIDOS </h1>
    
    
    <p>Productos creados entre el 2018-01-03 y 2018-01-20</p>
    
    <table>
        <tr>
            <th>ID_PRODUCTO</th>
            <th>COD_PRODUCTO</th>
            <th>ESTADO</th>
            <th>SECTOR</th>
            <th>FECHA_CREACION</th>
           
            
            
        </tr>
        <?php
        foreach ($result as $row) {
            ?>
        <tr>
            <td><?php echo $row["ID_PRODUCTO"]; ?></td>
            <td><?php echo $row["COD_PRODUCTO"]; ?></td>.
            <td><?php echo $row["ESTADO"]; ?></td>
            <td><?php echo $row["SECTOR"]; ?></td>
            <td><?php echo $row["FECHA_CREACION"]; ?></td>
                     
        </tr>
    <?php
        }
    ?>
    </table>
</body>
</html>
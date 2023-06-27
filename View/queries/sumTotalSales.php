<!DOCTYPE html>
<html>
<head>
    <title>TOTAL SALES</title>
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
$result=$datos->sumTotalSales();



//print_r($result);
?>
<body>
    <button class="back-button" onclick="goBack()">Atrás</button>
    <h1>TOTAL SALES</h1>
    
    <p>total de ventas realizadas en Santiago<p>
    
    <table>
        <tr>
            
            <th>ID_PRODUCTO</th>
            <th>DESCRIPCION</th>
            <th>TOTAL_VENTAS</th>
            
        </tr>
        <?php
        foreach ($result as $row) {
            ?>
        <tr>
            
            <td><?php echo $row["ID_PRODUCTO"]; ?></td>
            <td><?php echo $row["DESCRIPCION"]; ?></td>
            <td><?php echo "$" .$row["TOTAL_VENTAS"]; ?></td>
            
        </tr>
    <?php
        }
    ?>
    </table>
</body>
</html>
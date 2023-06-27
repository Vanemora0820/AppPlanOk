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
$result=$datos->totalSales();



//print_r($result);
?>
<body>
    <button class="back-button" onclick="goBack()">Atrás</button>
    <h1>TOTAL SALES</h1>
    
    <p>Total de departamentos Vendidos por el usuario PILAR PINO en Las Condes.</p>
    
    <table>
        <tr>
            
            <th>DESCRIPCION</th>
            <th>TOTAL VENDIDOS</th>
            
        </tr>
        <?php
        foreach ($result as $row) {
            ?>
        <tr>
            <td><?php echo $row["DESCRIPCION"]; ?></td>
            <td><?php echo $row["TOTAL_VENDIDOS"]; ?></td>
            
        </tr>
    <?php
        }
    ?>
    </table>
</body>
</html>
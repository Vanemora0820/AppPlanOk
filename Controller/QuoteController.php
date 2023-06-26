<?php
require_once('../Model/Quote.php');
require_once('../Model/Client.php');
include '../Model/Conexion.php';

class QuoteController {
    public function getQuotes() {
       

        // Realizar la consulta SQL para obtener las cotizaciones
        $sql = "SELECT co.idCotizacion, co.subtotal, co.descuento, co.total, C.rut
        FROM cotizacion co
        INNER JOIN cliente c on co.idCliente = c.id";

        $datos = new conexion();
        $conexion= $datos->conectar();
        $response = $conexion->query($sql);

        $quotes = [];
        while ($row = $response->fetch_assoc()) {
            // Crear instancias de Quote a partir de los resultados de la consulta
            $client = new Client ($row['rut']);
            $quote = new Quote($row['idCotizacion'], $row['subtotal'], $row['descuento'], $row['total'], $client);
            $quotes[] = $quote;
        }

        // Cerrar la conexión a la base de datos
        $conexion->close();
        return $quotes;

        
    }
}
?>
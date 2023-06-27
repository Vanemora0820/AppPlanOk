 <?php

include '../Model/Conexion.php';

 class QuoteDetailController{

    public function showQuoteDetail($id) {
     
        $datos = new Conexion();
        $conexion = $datos->conectar();
        //  llamar SP
        $query = "CALL GetQuoteDetail(".$id.")";
        $response = $conexion->query($query);
        $rows = $response->fetch_all(MYSQLI_ASSOC);
        return $rows;
        
    }
}
 ?>
 <?php

include '../Model/Conexion.php';

 class QuoteDetailController{

    public function showQuoteDetail($id) {
     
        $datos = new Conexion();
        $conexion = $datos->conectar();
        //  llamar SP
        $query = "CALL GetQuoteDetail(".$id.")";
        $response = $conexion->query($query);
        return $response;
        
    }
}
 ?>
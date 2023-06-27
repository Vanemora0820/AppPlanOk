<?php
include '../../Model/Conexion.php';

class QueriesController{
    
    public function getParking(){

        $sql = "SELECT  co.idCotizacion AS COTIZACION_ID,
        c.nombre AS NOMBRE_CLIENTE,
        p.idProducto AS PRODUCTO_ID,
        p.descripcion AS DESCRIPCIÓN_PRODUCTO,
        p.estado As ESTADO,
        p.sector AS SECTOR_PRODUCTO,
        tp.descripcion AS TIPO_PRODUCTO
        FROM cotizacion co
    INNER JOIN cotizacion_producto cp on co.idCotizacion = cp.idCotizacion
    INNER JOIN cliente c ON co.idCliente = c.id
    INNER JOIN producto p ON p.idProducto = cp.idProducto
    INNER JOIN tipo_producto tp ON tp.idTipoProducto = p.idTipoProducto
    WHERE p.estado ='VENDIDO' AND tp.idTipoProducto =2 AND p.sector = 'Santiago';";
         
         
          $datos = new conexion();
          $conexion= $datos->conectar();
          $response = $conexion->query($sql);
          $rows = $response->fetch_all(MYSQLI_ASSOC);
          return $rows;

    }

    public function totalSales(){

        $sql= "SELECT COUNT(*) AS TOTAL_VENDIDOS,  tp.descripcion AS DESCRIPCION
        FROM cotizacion co
        INNER JOIN cotizacion_producto cp ON co.idCotizacion = cp.idCotizacion
        INNER JOIN usuario u ON co.idUsuario = u.id
        INNER JOIN producto p ON p.idProducto = cp.idProducto
        INNER JOIN tipo_producto tp ON tp.idTipoProducto = p.idTipoProducto
        WHERE u.nombre = 'PILAR'
          AND p.sector = 'Las Condes'
          AND p.estado = 'VENDIDO'
          AND tp.descripcion = 'Producto Principal';";
          

          $datos = new conexion();
          $conexion= $datos->conectar();
          $response = $conexion->query($sql);
          $rows = $response->fetch_all(MYSQLI_ASSOC);
          return $rows;

    }

    public function creationProduct(){

        $sql= "SELECT p.idProducto AS ID_PRODUCTO,
        p.descripcion AS COD_PRODUCTO,
        P.estado AS ESTADO ,
        p.sector AS SECTOR ,
        DATE(p.fechaCreacion) AS FECHA_CREACION
        FROM producto p
 
        WHERE p.fechaCreacion >= '2018-01-03'
        AND p.fechaCreacion <= '2018-01-20'
        ORDER BY sector;";

          $datos = new conexion();
          $conexion= $datos->conectar();
          $response = $conexion->query($sql);
          $rows = $response->fetch_all(MYSQLI_ASSOC);
          return $rows;

    }

    public function sumTotalSales(){

        $sql="SELECT SUM(p.valorLista) AS TOTAL_VENTAS,
        p.idProducto AS ID_PRODUCTO,
        TP.descripcion AS DESCRIPCION
        FROM cotizacion_producto cp
        INNER JOIN producto p ON p.idProducto = cp.idProducto
        INNER JOIN tipo_producto tp ON  tp.idTipoProducto =P.idTipoProducto
        WHERE p.sector = 'Santiago'
        AND P.estado ='VENDIDO';";

        $datos = new conexion();
        $conexion= $datos->conectar();
        $response = $conexion->query($sql);
        $rows = $response->fetch_all(MYSQLI_ASSOC);
         return $rows;


    }






}

?>
<?php
require_once('../Model/User.php');
require_once('../Model/Profile.php');
include '../Model/Conexion.php';

class UserController {
    public function getUsers() {
        // Realizar la consulta SQL para obtener los usuarios y sus perfiles
        $sql = "SELECT u.id, u.nombre, u.apellido, p.idPerfil , p.descripcion
        FROM usuario u
        INNER JOIN perfil p ON u.idPerfil = p.idPerfil;";
        
        $datos = new conexion();
        $conexion= $datos->conectar();
        $response = $conexion->query($sql);


        $users = [];
        while ($row = $response->fetch_assoc()) {
            // Crear instancias de User y Profile a partir de los resultados de la consulta
            $profile = new Profile($row['idPerfil'], $row['descripcion']);
            $user = new User($row['id'], $row['nombre'],$row['apellido'], $profile);
            $users[] = $user;
        }

        // Cerrar la conexión a la base de datos
        $conexion->close();
        return $users;
 
    }
}
?>
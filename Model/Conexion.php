<?php
    class conexion{

        public function conectar()
        {
           $this->con = new mysqli('localhost','root','','planok');

            if ($this->con->connect_error) {
                die('Error de conexión: ' . $this->con->connect_error);
            }

            return $this->con;
        }

    }
?>
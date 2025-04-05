<?php
// Conexion a la base de datos
// Se recomienda usar PDO para mayor seguridad y flexibilidad

class Conexion{

    private $host = 'localhost';
    private $db = 'ventas';
    private $username = 'root';
    private $password = '';

    public function conectar(){
        try {
            $conexion = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
            //$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Establecer el modo de error a excepción
            return $conexion;
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            return null;
        }
    }

}

?>
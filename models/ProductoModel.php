<?php

class ProductoModel{

    private $conectar;

    public function __construct(){
        // Incluir el archivo de conexión
        require_once('c:xampp/htdocs/ventas/config/db.php');
        // Crear una instancia de la clase Conexion
        $conexion = new Conexion();
        // Llamar al método conectar para obtener la conexión
        $this->conectar = $conexion->conectar();
    }

    public function listarProductos(){

        // Consulta SQL para obtener todos los productos
        $consulta = "SELECT * FROM productos";
        // Preparar la consulta
        $statement = $this->conectar->prepare($consulta);
        // Ejecutar la consulta
        $statement->execute();
        // Obtener los resultados
        $resultados = $statement->fetchAll(PDO::FETCH_ASSOC);
        // Devolver los resultados
        return $resultados;
    }

    public function actualizarProducto($id, $codigo, $precio, $nombre){
        // Consulta SQL para actualizar un producto
        $consulta = "UPDATE productos SET COD_PRODUCT = :codigo, NOMBRE = :nombre, PRECIO = :precio WHERE ID_PRODUCT = :id";
        // Preparar la consulta
        //conectar es la variable de la clase Conexion
        // $this->conectar es la conexión a la base de datos
        $statement = $this->conectar->prepare($consulta);
        // Vincular los parámetros, usando bindParam
        $statement->bindParam(':codigo', $codigo);
        $statement->bindParam(':nombre', $nombre);
        $statement->bindParam(':precio', $precio);
        $statement->bindParam(':id', $id);
        // Ejecutar la consulta
        return $statement->execute();
    }
}
?>
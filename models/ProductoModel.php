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

    //Metodo para agregar un producto
    public function agregarProductos($nombre, $precio){
        $codigo = $this->generarCodigoProducto();
        // Consulta SQL para insertar un producto
        $consulta = "INSERT INTO productos (COD_PRODUCT, PRECIO, NOMBRE) VALUES (:codigo, :precio, :nombre)";
        // Preparar la consulta
        $statement = $this->conectar->prepare($consulta);
        // Vincular los parámetros
        $statement->bindParam(':codigo', $codigo);
        $statement->bindParam(':precio', $precio);
        $statement->bindParam(':nombre', $nombre);
        // Ejecutar la consulta
        try {
            $statement->execute();
            return true;
        } catch (Exception $e) {
            return false;
        } 
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

    public function actualizarProductos($id, $codigo, $precio, $nombre){
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
        try {
            $statement->execute();
            // Comprobar si se modificó alguna fila
            if ($statement->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        } 
    }

    public function eliminarProductos($id){
        // Consulta SQL para eliminar un producto
        $consulta = "DELETE FROM productos WHERE ID_PRODUCT = :id";
        // Preparar la consulta
        $statement = $this->conectar->prepare($consulta);
        // Vincular el parámetro
        $statement->bindParam(':id', $id);
        // Ejecutar la consulta
        try {
            $statement->execute();
            // Comprobar si se eliminó alguna fila
            if ($statement->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        } 
    }

    //Metodos para asignarle un codigo a un producto
    function obtenerUltimoIdProducto() {
        // Consulta SQL para obtener el ID del último producto agregado
        $consulta = "SELECT MAX(ID_PRODUCT) AS ultimo_id FROM productos";
        
        // Usar $this->conectar para referirse a la conexión a la base de datos
        $resultado = $this->conectar->query($consulta);
        
        // Obtener el resultado
        $fila = $resultado->fetch(PDO::FETCH_ASSOC);
        
        // Si no hay registros, asignar 0 como el ID del último producto
        $ultimoId = $fila['ultimo_id'] ? $fila['ultimo_id'] : 0;
        
        // Retornar el ID del último producto
        return $ultimoId;
    }
    
    function generarCodigoProducto() {
        // Obtener el último ID del producto
        $ultimoId = $this->obtenerUltimoIdProducto(); // Usar $this-> para acceder al método
        
        // Generar el código del nuevo producto
        $codigoProducto = "P00" . ($ultimoId + 1); // Se asume que el próximo producto tiene ID+1
        
        return $codigoProducto;
    }
}
?>
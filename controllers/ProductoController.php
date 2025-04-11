<?php

class ProductoController{

    private $productoModel;

    public function __construct(){
        // Incluir el modelo de producto
        require_once('c:xampp/htdocs/ventas/models/ProductoModel.php');
        // Crear una instancia del modelo
        $this->productoModel = new ProductoModel();
    }

    public function agregarProducto($nombre, $precio){
        // Llamar al método del modelo para agregar el producto
        return $this->productoModel->agregarProductos($nombre, $precio);
    }

    public function obtenerProductos(){
        // Llamar al método del modelo para obtener los productos
        $productos = $this->productoModel->listarProductos();
        // Devolver los productos
        return $productos;
    }

    public function actualizarProducto($id, $codigo, $precio, $nombre){
        // Llamar al método del modelo para actualizar el producto
        return $this->productoModel->actualizarProductos($id, $codigo, $precio, $nombre);
    }

    public function eliminarProducto($id){
        // Llamar al método del modelo para eliminar el producto
        return $this->productoModel->eliminarProductos($id);
    }

    /*GESTION DE EXISTENCIAS
    *
    /
    */
    public function obtenerExistencias(){
        // Llamar al método del modelo para obtener las existencias
        return $this->productoModel->listarExistencias();
    }

    public function actualizarExistencia($id, $cantidad){
        return $this->productoModel->actualizarExistencias($id, $cantidad);
    }

    public function agregarExistencia($id, $cantidad){
        return $this->productoModel->agregarExistencias($id, $cantidad);
    }

    public function eliminarExistencia($id){
        return $this->productoModel->eliminarExistencias($id);
    }
    /*FIN DE GESTION DE EXISTENCIAS
    *
    /
    */

}
?>
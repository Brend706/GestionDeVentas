<?php

class ProductoController{

    private $productoModel;

    public function __construct(){
        // Incluir el modelo de producto
        require_once('c:xampp/htdocs/ventas/models/ProductoModel.php');
        // Crear una instancia del modelo
        $this->productoModel = new ProductoModel();
    }

    public function obtenerProductos(){
        // Llamar al método del modelo para obtener los productos
        $productos = $this->productoModel->listarProductos();
        // Devolver los productos
        return $productos;
    }

    public function actualizarProducto($id, $codigo, $precio, $nombre){
        // Llamar al método del modelo para actualizar el producto
        return $this->productoModel->actualizarProducto($id, $codigo, $precio, $nombre);
    }
}
?>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once("c://xampp/htdocs/ventas/controllers/ProductoController.php"); // llamado al controlador
$objHC = new ProductoController();
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];


if (empty($nombre) || empty($precio)) {
    $_SESSION['mensajeAgregar'] = "¡Debe ingresar todos los campos!";
    $_SESSION['alertaAgregar'] = "info";
    //exit();
} else {
    if ($objHC->agregarProducto($nombre, $precio)) {
        $_SESSION['mensajeAgregar'] = "¡Producto guardado con éxito!";
        $_SESSION['alertaAgregar'] = "success";
        //exit();//salimos
    } else {
        $_SESSION['mensajeAgregar'] = "Error al guardado el producto!";
        $_SESSION['alertaAgregar'] = "error";
        //exit();
    }
}

header("Location: ../verProductos.php");
    exit();
?>

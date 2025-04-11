<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once("c://xampp/htdocs/ventas/controllers/ProductoController.php"); // llamado al controlador
$objHC = new ProductoController();
$cantidad = $_POST['cantidad'];
$producto = $_POST['producto'];

if (empty($cantidad) || empty($producto)) {
    $_SESSION['mensaje'] = "¡Debe ingresar todos los campos!";
    $_SESSION['alerta'] = "info";
} else {
    if ($objHC->agregarExistencia($producto, $cantidad)) {
        $_SESSION['mensaje'] = "¡Inventario Actualizado!";
        $_SESSION['alerta'] = "success";
    } else {
        $_SESSION['mensaje'] = "Error: Este Producto ya tiene un registro de stock!";
        $_SESSION['alerta'] = "error";
    }
}

header("Location: ../verInventario.php");
    exit();


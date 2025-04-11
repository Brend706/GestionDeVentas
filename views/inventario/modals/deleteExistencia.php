<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once("c://xampp/htdocs/ventas/controllers/ProductoController.php"); // llamado al controlador
$objHC = new ProductoController();
$id = $_POST['id'];

if (isset($_POST['submit'])) { // si se presiono el boton de submit
    if ($objHC->eliminarExistencia($id)) {
        $_SESSION['mensaje'] = "¡Producto eliminado del Inventario!";
        $_SESSION['alerta'] = "success";
    } else {
        $_SESSION['mensaje'] = "Error al eliminar el producto!";
        $_SESSION['alerta'] = "error";
    }
}

header("Location: ../verInventario.php");
    exit();
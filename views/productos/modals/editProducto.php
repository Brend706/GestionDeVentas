<?php
    session_start();

    require_once('c:xampp/htdocs/ventas/views/head/header.php');
    // Incluir el controlador de productos
    require_once('c:xampp/htdocs/ventas/controllers/ProductoController.php');
    // Crear una instancia del controlador de productos
    $productoController = new ProductoController();

    $codigo = $_POST['codigo']; //con POST se envian los datos del formulario
    // Se obtiene el valor del campo 'codigo' del formulario
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $id = $_POST['ID_PRODUCT'];

    if($productoController->actualizarProducto($id, $codigo, $precio, $nombre)){
        // Si la actualización fue exitosa
        $_SESSION['mensaje'] = "¡Producto actualizado con éxito!";
        $_SESSION['alerta'] = "success";
    }else{
        // Si hubo un error, 
        $_SESSION['mensaje'] = "Error al actualizar el producto o no se ingreso ningun cambio!";
        $_SESSION['alerta'] = "warning";
    }

    // Redirigir a la página de productos
    header("Location: ../verProductos.php");
    exit();
    ?>

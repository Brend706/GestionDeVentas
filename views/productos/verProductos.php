<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
//var_dump($_SESSION);

    require_once('c:xampp/htdocs/ventas/views/head/header.php');
    require_once('c:xampp/htdocs/ventas/controllers/ProductoController.php');
    $productoController = new ProductoController();
    $productos = $productoController->obtenerProductos();
?>
<div class="" id="verProductos">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="text-center">Gestion de Productos</h1>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                <i class="fas fa-plus"></i>  Agregar Producto
            </button> 
        </div>
        <div class="container-sm mx-auto">
        <table class="table table-hover table-bordered text-center w-75 mx-auto mt-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <!-- Aquí se generarán las filas de la tabla -->
                <?php foreach ($productos as $producto): ?>
                    <tr>
                        <td><?php echo $producto['ID_PRODUCT']; ?></td>
                        <td><?php echo $producto['COD_PRODUCT']; ?></td>
                        <td><?php echo $producto['NOMBRE']; ?></td>
                        <td><?php echo "$ ".$producto['PRECIO']; ?></td>
                        <td>
                            <button class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $producto['ID_PRODUCT']; ?>">
                                <i class="fas fa-edit"></i>  Editar
                            </button>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $producto['ID_PRODUCT']; ?>">
                                <i class="fas fa-trash"></i>  Eliminar
                            </button>
                        </td>
                    </tr>
                    <!-- se incluye el modal de edición -->
                    <?php include './modals/editModal.php'; ?>
                    <!-- se incluye el modal de eliminación -->
                    <?php include './modals/deleteModal.php'; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
</div>

<!---- Modal para agregar producto ---->
<?php include './modals/addModal.php'; ?>

<?php if (isset($_SESSION['mensaje'])): ?>
<script>
    Swal.fire({
        icon: '<?php echo $_SESSION['alerta']; ?>',
        title: '<?php echo ($_SESSION['alerta'] == "success") ? "¡Éxito!" : "¡Advertencia!"; ?>',
        text: '<?php echo $_SESSION['mensaje']; ?>'
    });
</script>
<?php
    unset($_SESSION['mensaje']);
    unset($_SESSION['alerta']);
endif;
?>

<?php if (isset($_SESSION['mensajeAgregar'])): ?>
<script>
    Swal.fire({
        position: "top-end",
        icon: '<?php echo $_SESSION['alertaAgregar']; ?>',
        title: '<?php echo ($_SESSION['alertaAgregar'] == "success") ? "¡Éxito!" : "¡Advertencia!"; ?>',
        text: '<?php echo $_SESSION['mensajeAgregar']; ?>',
        showConfirmButton: false,
        timer: 1500
    });
</script>
<?php
    unset($_SESSION['mensajeAgregar']);
    unset($_SESSION['alertaAgregar']);
endif;
?>

<?php
require_once("c://xampp/htdocs/ventas/controllers/ProductoController.php");
$controller = new ProductoController();
$cantidad = isset($_GET['cantidad']) ? $_GET['cantidad'] : '';
$producto = isset($_GET['producto']) ? $_GET['producto'] : '';
?>

<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Agregar Existencia de un producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./modals/agregarExistencia.php" method="POST">
                    <div class="mb-3">
                        <label for="producto" class="form-label">Codigo del Producto</label>
                        <input type="number" min="1" class="form-control" id="producto" name="producto" value="<?php echo htmlspecialchars($producto); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="cantidad" class="form-label">Cantidad</label>
                        <input type="number" min="0" class="form-control" id="cantidad" name="cantidad" value="<?php echo htmlspecialchars($cantidad); ?>" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>

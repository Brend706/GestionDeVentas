
<div class="modal fade" id="editModal<?php echo $producto['ID_PRODUCT']; ?>" tabindex="-1" aria-labelledby="editModalLabel<?php echo $producto['ID_PRODUCT']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel<?php echo $producto['ID_PRODUCT']; ?>">Editar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario de edición -->
                <form action="./modals/editProducto.php" method="POST">
                    <input type="hidden" name="ID_PRODUCT" value="<?php echo $producto['ID_PRODUCT']; ?>">
                    <div class="mb-3">
                        <label for="codigo<?php echo $producto['ID_PRODUCT']; ?>" class="form-label">Codigo del producto</label>
                        <input type="text" class="form-control" id="codigo<?php echo $producto['ID_PRODUCT']; ?>" name="codigo" value="<?php echo $producto['COD_PRODUCT']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nombre<?php echo $producto['ID_PRODUCT']; ?>" class="form-label">Nombre del producto</label>
                        <input type="text" class="form-control" id="nombre<?php echo $producto['ID_PRODUCT']; ?>" name="nombre" value="<?php echo $producto['NOMBRE']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="precio<?php echo $producto['ID_PRODUCT']; ?>" class="form-label">Precio</label>
                        <input type="text" class="form-control" id="precio<?php echo $p['ID_PRODUCT']; ?>" name="precio" value="<?php echo $producto['PRECIO']; ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="editModal<?php echo $existencia['ID_EXISTENCIA']; ?>" tabindex="-1" aria-labelledby="editModalLabel<?php echo $existencia['ID_EXISTENCIA']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel<?php echo $existencia['ID_EXISTENCIA']; ?>">Actualizar existencia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario de edición -->
                <form action="./modals/editExistencia.php" method="POST">
                    <input type="hidden" name="ID_EXISTENCIA" value="<?php echo $existencia['ID_EXISTENCIA']; ?>">
                    <div class="mb-3">
                        <label for="cantidad<?php echo $existencia['ID_EXISTENCIA']; ?>" class="form-label">Cantidad en existencia</label>
                        <input type="number" min="0" class="form-control" id="cantidad<?php echo $existencia['ID_EXISTENCIA']; ?>" name="cantidad" value="<?php echo $existencia['CANTIDAD']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="producto<?php echo $existencia['ID_EXISTENCIA']; ?>" class="form-label">Producto</label>
                        <strong><label for="" name="producto"><?php echo $existencia['PRODUCTO']; ?></label></strong>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

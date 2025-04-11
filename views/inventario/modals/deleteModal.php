<div class="modal fade" id="deleteModal<?php echo $existencia['ID_EXISTENCIA']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?php echo $existencia['ID_EXISTENCIA']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel<?php echo $existencia['ID_EXISTENCIA']; ?>">Eliminar Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>¿Está seguro que desea eliminar este producto del inventario: <strong><?php echo $existencia['PRODUCTO']; ?>??</strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form action="./modals/deleteExistencia.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $existencia['ID_EXISTENCIA']; ?>">
                    <button type="submit" name="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>
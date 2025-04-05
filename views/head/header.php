<?php
    require_once('c:xampp/htdocs/ventas/views/head/head.php');
?>

<div class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#verProductos" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Productos</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Ventas</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Inventario</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Perfil</button>
    </li>
    </ul>
   
</div>
<!-- se incluyen las vistas de productos, ventas e inventario -->
<?php //include './views/productos/verProductos.php'; ?>
<?php //include './views/ventas/verVentas.php'; ?>
<?php //include './views/inventario/verInventario.php'; ?>    


<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
<!-- Begin page content -->
<main role="main" class="container">    
    <h1>Detalle del tipo de producto</h1>
    <div class="card">
        <div class="card-header">
            Producto numero <?= $product->id ?>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Id: <?= $product->id ?></li>
            <li class="list-group-item">Apellidos: <?= $product->name ?></li>
        </ul>
  </div>    
</main>

<?php include('../views/parts/footer.php'); ?>
<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
<!-- Begin page content -->
<main role="main" class="container">    
    <h1>Edición del tipo de producto</h1>

    <form action="/producttype/update/<?= $product->id ?>" method="POST">
    <div class="form-group">
        <label for="id">Id:</label>
        <input class="form-control" type="text" name="id">
    </div>
    <div class="form-group">      
        <label for="name">Nombre:</label>
        <input class="form-control"  type="text" name="name">
    </div>
    <div class="form-group">
        <input class="form-control"  type="submit" value="Guardar">
    </div>
    </form>
</main>

<?php include('../views/parts/footer.php'); ?>
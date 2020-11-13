<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
<!-- Begin page content -->
<main role="main" class="container">    
    <h1>Alta del tipo de producto</h1>
    <form action="/producttype/store" method="POST">
    <div class="form-group">
        <label for="id">Id:</label>
        <input class="form-control" type="text" value="<?= $product->id ?>" name="id">
    </div>
    <div class="form-group">      
        <label for="name">Nombre:</label>
        <input class="form-control"  type="text" value="<?= $product->$name ?>" name="name">
    </div>
    <div class="form-group">
        <input class="form-control"  type="submit" value="Guardar">
    </div>
    </form>
</main>
<?php include('../views/parts/footer.php'); ?>

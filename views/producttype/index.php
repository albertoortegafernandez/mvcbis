<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
<!-- Begin page content -->
<main role="main" class="container">
  <h1>Lista de tipos de productos  </h1>
  <a class="btn btn-primary float-right" href="/producttype/create">Nuevo</a>
  <table class="table table-striped">
        <thead>
            <tr>
            <th>Id</th>
            <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($producTypes as $product){?>
                <tr>
                <td><?= $product->id ?></td>
                <td><?= $product->name ?></td>
                <td><a class="btn btn-primary btn-sm" href="/producttype/show/<?= $product->id ?>">  Ver </a></td>
                <td><a class="btn btn-primary btn-sm"href="/producttype/edit/<?= $product->id ?>">  Editar </a></td>
                <td><a class="btn btn-primary btn-sm"href="/producttype/delete/<?= $product->id ?>">  Borrar </a></td>
                </tr>
            <?php } ?>            
        </tbody>
    </table>
</main>
<?php include('../views/parts/footer.php'); ?>

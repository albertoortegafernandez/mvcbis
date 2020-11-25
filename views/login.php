<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
<!-- Begin page content -->
<main role="main" class="container">    
    <h1>Acceso</h1>

    <form action="/login/acceder" method="POST">
        <div class="form-group">      
            <label for="email">Email:</label>
            <input class="form-control"  type="text" name="email">
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input class="form-control" type="password"  name="password">
        </div>
        <div class="form-group">
            <input class="form-control"  type="submit" value="Entrar">
        </div>
    </form>   
</main>

<?php include('../views/parts/footer.php'); ?>

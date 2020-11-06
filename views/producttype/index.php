<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <title>MVC</title>
    </head>
  <body>
<h1>Lista de Usuarios</h1>

    <table>
        <thead>
            <tr>
           <th>Id</th>
           <th>Nombre</th>  
            </tr>
        </thead>
        <tbody>
               <?php foreach ($products as $product) {?>
                <tr>
                    <td><?= $product->id ?></td>
                    <td><?= $product->name ?></td>
                </tr> 
               <?php } ?>
        </tbody>
    </table>
  </body>
</html>

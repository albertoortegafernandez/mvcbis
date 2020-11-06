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
           <th>Nombre</th>
           <th>Apellido</th> 
           <th>Email</th> 
           <th>F.Nacimiento</th>  
            </tr>
        </thead>
        <tbody>
               <?php foreach ($users as $user) {?>
                <tr>
                    <td><?= $user->name ?></td>
                    <td><?= $user->surname ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->birthdate ?></td>
                </tr> 
               <?php } ?>
        </tbody>
    </table>
  </body>
</html>

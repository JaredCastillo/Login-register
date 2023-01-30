<!DOCTYPE html>

<!--IMPORTACION DE BOOTSTRAP -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <div class="d-flex justify-content-center">
        <form action="validar.php" method="POST" enctype="multipart/form-data">
            <div class="form-group mx-sm3 mb2">
            <h1> Sistema de Login</h1>
            <p>Usuario<input type="text" required class="form-control" placeholder="ingrese su nombre de usuario" name="username"></p>
            <p>Contraseña <input type="password" required class="form-control" placeholder="Ingrese su contraseña" name="contrasenia"></p>
            <input type="submit" class="btn btn-primary mb-2" value="Ingresar">
            <a href="register.php">Registrate</a>
        </form>
        </div>
    </body>
</html>

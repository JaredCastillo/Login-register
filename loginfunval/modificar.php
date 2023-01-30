<!--IMPORTACION DE BOOTSTRAP -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<html>

<head>
    <title>Edicion de Perfil</title>
</head>

<body>

    <div class="container">
        
        <?php
                include("conexion.php");
                $id = $_REQUEST[ 'id' ];
                $query = "SELECT * FROM datos WHERE id='$id' ";
                $resultado = $conexion->query($query);
                $row = $resultado->fetch_assoc();
        ?>
        <div class="d-flex justify-content-center">
            
        <form action="procesomod.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
        <?php
        echo '<h1>Edición de Perfil</h1>';
        ?>
            <div class="form-group mx-sm3 mb-2">
                <label></label>
                <input type="text" REQUIRED class="form-control" name="username" placeholder="Nombre de usuario" value='<?php echo $row['username']; ?>'/>
            </div>
            <div class="form-group mx-sm3 mb-2">
                <label></label>
                <input type="text" REQUIRED class="form-control" name="bio" placeholder="Biografia" value='<?php echo $row['bio']; ?>'/>
            </div>
            <div class="form-group mx-sm3 mb-2">
                <label></label>
                <input type="text" REQUIRED class="form-control" name="phone" placeholder="Telefono" value='<?php echo $row['phone']; ?>'/>
            </div>
            <img height="85" src='data:image/jpeg;base64, <?php echo base64_encode(($row['photo'])); ?>' alt="Sin imagen disponible (solo acepto jpeg)" />
            <div class="form-group mx-sm3 mb-2">
                <label></label>
                <input type="file" REQUIRED class="form-control" name="photo" />
            </div>
            <input type="submit" class="btn btn-primary mb-2" value="aceptar" />
        </form>
        </div>
    </div>
</body>
</html>
<!--IMPORTACION DE BOOTSTRAP -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<html>

<head>
    <title>Tu Perfil</title>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <?php
                include("conexion.php");
                $id = $_REQUEST['id'];
                $query = "SELECT * FROM datos WHERE id= '$id' ";
                $resultado = $conexion->query($query);
                $row = $resultado->fetch_assoc();
         ?>
<div class="card" style="width: 20rem;">
  <img height="85" src="data:image/png;base64, <?php echo base64_encode(($row['photo'])); ?>" alt="Sin Imagen" />
  <div class="card-body">
    <h5 class="card-title">Biografia</h5>
    <p class="card-text" value="Aqui puedes escribir algo"><?php echo $row['bio']; ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item" value='<?php echo $row['username']; ?>'>
    <li class="list-group-item"><?php echo $row['phone']; ?></li>
    <li class="list-group-item"><?php echo $row['email']; ?></li>
  </ul>
  <div class="card-body">
    <a href="modificar.php?id= <?php echo $row['id']; ?>" class="card-link"> Modificar </a>
    <a href="eliminar.php?id=<?php echo $row ['id']; ?>" class="card-link"> Eliminar Cuenta </a>
    <a href="inicio.php?id=<?php echo $row['id'] ?>" class="card-link"> Inicio </a>
  </div>
</div>
</div>
    <?php ?>
    
</body>

</html>
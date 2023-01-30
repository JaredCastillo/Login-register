<?php
$username=$_POST['username'];
$contrasenia = $_POST['contrasenia'];
session_start();

if(isset($_SESSION['username'])){
    header("Location:inicio.php");
}

include('conexion.php');

$consulta= "SELECT * FROM datos WHERE username='$username' and contrasenia='$contrasenia' ";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas !=0){
    while($row=mysqli_fetch_array($resultado)){
        if($username ==$row['username'] && $contrasenia==$row['contrasenia'])
        {
           $_SESSION['username'] = $username;
           $_SESSION['id'] = $row['id'];
             header("Location:inicio.php");
        }
    }
}else{
        ?>
        <?php include("index.php");
        ?>

        <h1> Error en la autentificacion</h1>
        <?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>


<?php
include ("conexion.php");

$username = $_POST["username"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$contrasenia = $_POST["contrasenia"];

$query = "INSERT INTO datos(`username`,  `phone`, `email`, `contrasenia`)
VALUES ('$username', '$phone', '$email', '$contrasenia') ";
$resultado = $conexion->query($query);
if($resultado)
{
    header("location:index.php");
}
?>
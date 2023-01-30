<?php
include ("conexion.php");

$id = $_REQUEST['id'];

$query = "DELETE FROM datos WHERE id='$id' ";
$resultado = $conexion->query($query);
if($resultado)
{
    header("Location:register.php");
}
?>
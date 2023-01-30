<?php
include ("conexion.php");

$id = $_REQUEST['id'];
$username = $_POST["username"];
$phone = $_POST["phone"];
$bio = $_POST["bio"];
$photo = addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));

$query = "UPDATE datos SET `username`='$username', `phone`='$phone', `bio`='$bio', `photo` ='$photo' WHERE `id`='$id' ";
$resultado = $conexion->query($query);
if($resultado)
{
    header("Location:perfil.php");
} else {
    echo "NO se enviaron los datos";
}
?>
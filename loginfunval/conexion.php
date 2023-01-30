<?php
$conexion = new mysqli("localhost", "root", "", "usuarios");
if($conexion)
{

} else{
    echo "conexion fallida";
}
?>
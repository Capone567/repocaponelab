<?php
$server = "localhost";
$usuario = "root";
$db = "tienda";

$conexion = mysqli_connect($server, $usuario, "", $db);

if (!$conexion) {
    die("Error de conexion: " . mysqli_connect_error());
}
?>

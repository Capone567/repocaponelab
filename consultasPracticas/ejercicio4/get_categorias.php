<?php
header('Content-Type: application/json');

$inc = include("conexion.php");

$datos = [];

if ($inc && $conexion) {
    $resultado = mysqli_query($conexion, "SELECT id, nombre FROM categorias");
    if ($resultado) {
        while ($row = mysqli_fetch_assoc($resultado)) {
            $datos[] = $row;
        }
    }
}

echo json_encode($datos);
?>

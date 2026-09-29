<?php
header('Content-Type: application/json');

$inc = include("conexion.php");

$datos = [];

if ($inc && $conexion) {
    // JOIN: ventas -> usuarios (para obtener el nombre del vendedor)
    // Cada venta tiene: cantidad, precio_unitario, y a que usuario/vendedor pertenece
    $consulta = "SELECT u.nombre AS vendedor, v.cantidad, v.precio_unitario
                 FROM ventas v
                 INNER JOIN usuarios u ON v.vendedor_id = u.id";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        while ($row = mysqli_fetch_assoc($resultado)) {
            $datos[] = $row;
        }
    }
}

echo json_encode($datos);
?>

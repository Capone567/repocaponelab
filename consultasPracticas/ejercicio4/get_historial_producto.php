<?php
header('Content-Type: application/json');

$inc = include("conexion.php");

$datos = [];

if ($inc && $conexion) {
    // producto_id viene por GET y es obligatorio para esta consulta
    $producto_id = $_GET['producto_id'] ?? '';

    if ($producto_id !== '') {
        // Placeholder ? para evitar inyeccion SQL
        $stmt = mysqli_prepare($conexion, "SELECT cantidad, precio_unitario, fecha FROM ventas WHERE producto_id = ?");
        mysqli_stmt_bind_param($stmt, 'i', $producto_id);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);

        if ($resultado) {
            while ($row = mysqli_fetch_assoc($resultado)) {
                $datos[] = $row;
            }
        }
    }
}

echo json_encode($datos);
?>

<?php
header('Content-Type: application/json');

$inc = include("conexion.php");

$datos = [];

if ($inc && $conexion) {
    // categoria_id es opcional: si no se pasa, devolvemos todos los productos
    $categoria_id = $_GET['categoria_id'] ?? '';

    if ($categoria_id !== '') {
        // Filtro por categoria_id usando prepared statement
        $stmt = mysqli_prepare($conexion, "SELECT id, nombre, precio, stock, categoria_id FROM productos WHERE categoria_id = ?");
        mysqli_stmt_bind_param($stmt, 'i', $categoria_id);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);
    } else {
        // Sin filtro: traemos todos los productos con su categoria
        $resultado = mysqli_query($conexion, "SELECT p.id, p.nombre, p.precio, p.stock, p.categoria_id, c.nombre AS categoria FROM productos p LEFT JOIN categorias c ON p.categoria_id = c.id");
    }

    if ($resultado) {
        while ($row = mysqli_fetch_assoc($resultado)) {
            $datos[] = $row;
        }
    }
}

// json_encode convierte el array PHP a texto JSON
echo json_encode($datos);
?>

<?php
    $inc = include("conexion.php");
    if ($inc){
        $consulta = "SELECT p.nombre AS pais, pr.nombre AS presidente FROM pais p INNER JOIN presidente pr ON p.nombre = pr.pais_nombre";
        $resultado = mysqli_query($conexion, $consulta);
        $datos = [];
        if ($resultado) {
              while($row = $resultado  -> fetch_assoc()){
                $datos[] = $row;
              }        
        }
    echo json_encode($datos);

    }


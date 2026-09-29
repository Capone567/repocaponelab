<?php

    $pais = $_GET['pais'] ?? '';
    $inc = include("conexion.php");
    if ($conexion && $inc){
        /*$consulta = "SELECT p.nombre AS pais, pr.nombre AS presidente 
        FROM pais p INNER JOIN presidente pr ON p.nombre = pr.pais_nombre
        WHERE p.nombre='$pais'";
        */
        $consulta = "SELECT nombre, dni FROM presidente";
        $resultado = mysqli_query($conexion, $consulta);
        $datos = [];
        if ($resultado) {
              while($row = $resultado  -> fetch_assoc()){
                $datos[] = $row;
              }        
        }
    echo json_encode($datos);

    }


<?php
    $conexion = mysqli_connect("localhost", "root", "toringo12");
    mysqli_select_db($conexion, "pruebas");
    $consulta = mysqli_query($conexion, ' UPDATE `lamparas` SET `ESTADO`=" ON" WHERE ID_LAMPARA="L001"  ');
    $boton='ESTADO';
    if ($boton='ON') {
        mysqli_query($conexion, ' UPDATE `lamparas` SET `ESTADO`="OFF" WHERE ID_LAMPARA="L001"  ');
    }
    else {
        mysqli_query($conexion, ' UPDATE `lamparas` SET `ESTADO`="ON" WHERE ID_LAMPARA="L001"  ');
    }
    $estado = mysqli_fetch_array($consulta);
    echo "estado=" . end($estado) . ";";
?>


<?php
    $conexion = mysqli_connect("localhost", "root", "toringo12");
    mysqli_select_db($conexion, "pruebas");
    $check_status = mysqli_query($conexion, "SELECT * from lamparas");

    echo $check_status;
    // 
    

?>
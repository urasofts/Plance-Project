<?php

    $conexion = mysqli_connect("localhost","root","","place_bsd");

    if ($conexion) {
        echo "Conexión exitosa";
    } else {
        echo "Error en la conexión";
    }   

?>
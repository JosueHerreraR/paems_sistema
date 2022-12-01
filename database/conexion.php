<?php

    $db_host = "localhost";
    $db_name = "practicas";
    $db_user = "root";
    $db_pass = "";

    $conexion = mysqli_connect($db_host, $db_user, $db_pass);
    $db = mysqli_select_db($conexion, $db_name) or die ("No se ha podido conectar al Servidor.");

    mysqli_select_db($conexion, $db_name) or die ("Upps!! Error de conexión con la DataBase");
    mysqli_set_charset($conexion, "utf8");
    
?>
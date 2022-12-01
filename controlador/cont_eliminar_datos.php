<?php

    $id = $_GET['id'];
    include '../database/conexion.php';

    $sql_delete = "DELETE FROM datos_escuelas WHERE id_escuela = '$id'";
    $resultadoDelete = mysqli_query($conexion, $sql_delete);

    if($resultadoDelete){
        echo "<script languaje='JavaScript'>alert('Los datos SI se eliminaron correctamente.'); location.assign('../modi_datos.php');</script>";
    }else{
        echo "<script languaje='JavaScript'>alert('Los datos NO se eliminaron correctamente.'); location.assign('../modi_datos.php');</script>";
    }
    mysqli_close($conexion);

?>
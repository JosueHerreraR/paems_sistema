<?php

    $id = $_GET['id'];
    include '../database/conexion.php';

    $sql_delete = "DELETE FROM imagenes_escuelas WHERE id_img = '$id'";
    $resultadoDelete = mysqli_query($conexion, $sql_delete);

    if($resultadoDelete){
        echo "<script languaje='JavaScript'>alert('Los datos SI se eliminaron correctamente.'); location.assign('modificacion_tabla3.php');</script>";
    }else{
        echo "<script languaje='JavaScript'>alert('Los datos NO se eliminaron correctamente.'); location.assign('modificacion_tabla3.php');</script>";
    }
    mysqli_close($conexion);

?>
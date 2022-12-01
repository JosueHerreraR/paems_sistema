<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar</title>
    </head>
    <body>
        <?php
            include '../database/conexion.php';
            
            if(isset($_POST['actualizar'])){
                //Cuando se presiona el boton Actualizar
                

                //Actualizacion de los datos
                $sql_update = "UPDATE imagenes_escuelas SET instalacion_1  = '$', instalacion_2 = '$', instalacion_3 = '$' WHERE id_img = '$id_img'";
                $resultadoUpdate = mysqli_query($conexion, $sql_update);

                if($resultadoUpdate){
                    echo "<script languaje='JavaScript'>alert('Los datos SI se actualizaron correctamente.'); location.assign('../modificacion_tabla3.php');</script>";
                }else{
                    echo "<script languaje='JavaScript'>alert('Los datos NO se actualizaron correctamente.'); location.assign('../modificacion_tabla3.php');</script>";
                }
                mysqli_close($conexion);

            }else{
                //Cuando aun no se presiona el boton Actualizar
                $id = $_GET['id'];
                
                $sql_datos = "SELECT * FROM imagenes_escuelas WHERE id_img  = '".$id."' ";
                $resultadoEditar = mysqli_query($conexion, $sql_datos);

                $fila = mysqli_fetch_assoc($resultadoEditar);
                    $id_img = $fila['id_img']; 
                    $tipo_inst_1  = $fila['instalacion_1'];
                    $nombre_inst_2  = $fila['instalacion_2'];
                    $tipo_inst_3  = $fila['instalacion_3'];

                mysqli_close($conexion);
        ?>
        <h1>Editar Formulario</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
            
            <?php
            
                $path = "/Formulario_Feria_Eta/fotos-instalaciones/".$id_img;
                if(file_exists($path){
                    $directorio = opendir($path);
                    while()
                })
            ?>
        
            <label for=""></label>
            <input type="text">
            <label for=""></label>
            <input type="text">

            <input type="hidden" name="id_img" value="<?php echo $id_img?>"><br>

            <input type="submit" name="actualizar" value="actualizar">
            <a href="../modificacion_tabla3.php">regresar</a>
        </form>
        <?php
            }
        ?>
    </body>
</html>
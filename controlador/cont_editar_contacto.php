<?php
    session_start();
    if(isset($_SESSION['id_usuario']) && isset($_SESSION['usuario'])){
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="autor" content="Joel Josue Herrera Reyes y Jose Orlando Poot Dzul"/>
        <meta name="copyright" content="Servicios Educativos de Quintana Roo y la Universidad Autonoma del Estado de Quintana Roo"/> 
        <meta name="description" content="Feria de Orientación Educativa del Nivel Media Superior">
        <title>Modificar - Contactos</title>
        <link rel="shortcut icon" href="../img/logo_paems.jpg" type="image/x-icon">
        <link rel="stylesheet" href="../css/formulario.css">
        <link rel="stylesheet" href="../css/sistema.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    </head>
    <body>
        <?php
            include '../database/conexion.php';
            
            if(isset($_POST['actualizar'])){
                //Cuando se presiona el boton Actualizar
                $id_red_social = $_POST['id_red_social'];
                $direccion = $_POST['direccion'];
                $whatsapp = $_POST['whatsapp'];
                $telefono = $_POST['telefono'];
                $email = $_POST['email'];
                $maps = $_POST['maps']; //<-detalle

                //Actualizacion de los datos
                $sql_update = "UPDATE redes_sociales SET direccion  = '$direccion', whatsapp = '$whatsapp', telefono  = '$telefono' , email  = '$email', maps = '$maps' WHERE id_red_social = '$id_red_social'";
                $resultadoUpdate = mysqli_query($conexion, $sql_update);

                if($resultadoUpdate){
                    echo "<script languaje='JavaScript'>alert('Los datos SI se actualizaron correctamente.'); location.assign('../modi_contacto.php');</script>";
                }else{
                    echo "<script languaje='JavaScript'>alert('Los datos NO se actualizaron correctamente.'); location.assign('../modi_contacto.php');</script>";
                }
                mysqli_close($conexion);

            }else{
                //Cuando aun no se presiona el boton Actualizar
                $id = $_GET['id'];
                
                $sql_redes = "SELECT * FROM redes_sociales WHERE id_red_social = '".$id."' ";
                $resultadoEditar = mysqli_query($conexion, $sql_redes);

                $fila = mysqli_fetch_assoc($resultadoEditar);
                    $id_red_social = $fila['id_red_social']; 
                    $direccion = $fila['direccion'];
                    $whatsapp = $fila['whatsapp'];
                    $telefono = $fila['telefono'];
                    $email = $fila['email'];
                    $maps = $fila['maps'];

                mysqli_close($conexion);
        ?>

        <header>
            <div class="logo"><span>Sistema de la Feria</span></div>

            <div class="main">
                <a href="../index.php" class="user"><i class="ri-user-fill"></i> <?php echo $_SESSION["usuario"]; ?></a>
                <a href="controlador/cont_sing_out.php">Cerrar Sesión</a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </header>

        <section>
            
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
                <h1>Editar Datos de las Contacto</h1>
                <label for="">Dirección del plantel:</label>
                <input type="text" name="direccion" class="field" value="<?php echo $direccion?>" id="direccion"><br>
                <label for="">Link del chat de WhatsApp:</label>
                <input type="text" name="whatsapp" class="field" value="<?php echo $whatsapp?>" id="whatsapp"><br>
                <label for="">Número del telefono de contacto:</label>
                <input type="text" name="telefono" class="field" value="<?php echo $telefono?>" id="telefono"><br>
                <label for="">Correo escolar de contacto:</label>
                <input type="text" name="email" class="field" value="<?php echo $email?>" id="email"><br>
                <label for="">Link de la ubicación en Google Maps:</label>
                <input type="text" name="maps" class="field" value="<?php echo $maps?>" id="maps"><br>

                <input type="hidden" name="id_red_social" value="<?php echo $id_red_social?>"><br>

                <input class="btn" type="submit" name="actualizar" value="Actualizar">
                <a class="btn" href="../modi_contacto.php">Regresar</a>
            </form>
            <?php
                }
            ?>
        </section>

        <footer>
            <div class="foot__container">
                <div class="footer__bottom">
                    <div class="copy_right">
                        <i class='bx bxs-copyright'></i>
                        <span>Secretaria de Educación de Quintana Roo</span>
                    </div>
                </div>
            </div>
        </footer>
        
    </body>
</html>

<?php
    } else{
        header ("location: ../login.php");
        exit();
    }
?>
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
        <title>Modificar - Datos Escolares</title>
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
                $id_escuela = $_POST['id_escuela'];
                $nombre_plantel = $_POST['nombre_plantel'];
                $sector_educativo = $_POST['sector_educativo'];
                $municipio = $_POST['municipio'];
                $bienvenidos = $_POST['bienvenidos'];
                $caso_exito = $_POST['caso_exito']; 

                //Actualizacion de los datos
                $sql_update = "UPDATE datos_escuelas SET nombre_plantel  = '$nombre_plantel', sector_educativo = '$sector_educativo', municipio = '$municipio', bienvenidos  = '$bienvenidos', caso_exito = '$caso_exito' WHERE id_escuela = '$id_escuela'";
                $resultadoUpdate = mysqli_query($conexion, $sql_update);

                if($resultadoUpdate){
                    echo "<script languaje='JavaScript'>alert('Los datos SI se actualizaron correctamente.'); location.assign('../modi_datos.php');</script>";
                }else{
                    echo "<script languaje='JavaScript'>alert('Los datos NO se actualizaron correctamente.'); location.assign('../modi_datos.php');</script>";
                }
                mysqli_close($conexion);

            }else{
                //Cuando aun no se presiona el boton Actualizar
                $id = $_GET['id'];
                
                $sql_datos = "SELECT * FROM datos_escuelas WHERE id_escuela = '".$id."' ";
                $resultadoEditar = mysqli_query($conexion, $sql_datos);

                $fila = mysqli_fetch_assoc($resultadoEditar);
                    $id_escuela = $fila['id_escuela']; 
                    $nombre_plantel = $fila['nombre_plantel'];
                    $bienvenidos = $fila['bienvenidos'];
                    $caso_exito = $fila['caso_exito'];

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

            <div class="form">
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
                    <h1>Editar Datos Escolares</h1>
                    <label for="nombre_plantel">Nombre:</label>
                    <input type="text" name="nombre_plantel" class="field" value="<?php echo $nombre_plantel?>">
                    <label for="bienvenidos">Video 1 (Bienvenida):</label>
                    <input type="text" name="bienvenidos" class="field" value="<?php echo $bienvenidos?>">
                    <label for="sector_educativo">Sector Educativo</label>
                    <select name="sector_educativo" class="field" id="municipio" required>
                        <option value="Público">Público</option>
                        <option value="Privado">Privado</option>
                        <option value="Modular">Modular</option>
                    </select>
                    <label for="municipio">Municipio:</label>
                    <select name="municipio" class="field" id="municipio" required>
                        <option value="Bacalar">Bacalar</option>
                        <option value="Benito Juárez">Benito Juárez</option>
                        <option value="Cozumel">Cozumel</option>
                        <option value="Felipe Carrillo Puerto">Felipe Carrillo Puerto</option>
                        <option value="Isla Mujeres">Isla Mujeres</option>
                        <option value="José María Morelos">José María Morelos</option>
                        <option value="Lázaro Cárdenas">Lázaro Cardenas</option>
                        <option value="othon_p_blanco">Othón P. Blanco</option>
                        <option value="Puerto Morelos">Puerto Morelos</option>
                        <option value="Solidaridad">Solidaridad</option>
                        <option value="tulum">Tulum</option>
                    </select>
                    <label for="caso_exito">Video 2 (Casos de Exito):</label>
                    <input type="text" name="caso_exito" class="field" value="<?php echo $caso_exito?>" id="caso_exito">

                    <input type="hidden" name="id_escuela" value="<?php echo $id_escuela?>">

                    <input class="btn" type="submit" name="actualizar" value="Actualizar">
                    <a class="btn" href="../modi_datos.php"> Regresar </a>
                </form>
            </div>
            
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

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
        <title>Tabla - Act. Extracurricuales</title>
        <!-- -->
        <link rel="shortcut icon" href="img/logo_paems.jpg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="css/sistema.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <!-- -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

    <body>
        <header style="display: flex;">
            <div class="logo"><span>Sistema de la Feria</span></div>

            <div class="main">
                <a style="text-decoration: none;" href="index.php" class="user"><i class="ri-user-fill"></i> <?php echo $_SESSION["usuario"]; ?></a>
                <a style="text-decoration: none;" href="controlador/cont_sing_out.php">Cerrar Sesión</a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </header>
        
        <div class="jumbotron text-center" style="padding: 2rem 2rem;">
            <h4>Actividades Extracurricuales</h4>
        </div>

        <!-- view of uploaded images -->
        <div class="container" id="gallery"></div>

        <!--Edit Multiple image form -->
        <div class='modal' id='exampleModal'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h4 class='modal-title'>Actualizar imagen</h4>
                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    </div>
                    <div id="editForm"></div>
                </div>    
            </div>
        </div>

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
        
        <script type="text/javascript" src="js/extracurricular.js"></script>
    </body>
</html>

<?php
    } else{
        header ("location: login.php");
        exit();
    }
?>
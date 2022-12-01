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
        <title>Tabla - Redes Sociales</title>
        <link rel="shortcut icon" href="img/logo_paems.jpg" type="image/x-icon">
        <link rel="stylesheet" href="css/crud.css">
        <link rel="stylesheet" href="css/sistema.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <script type="text/javascript">
            function confirmar(){
                return confirm('¿Estas seguro de eliminarlo? Se eliminarán los datos.');
            }
        </script>
    </head>
    <body>
        
        <header>
            <div class="logo"><span>Sistema de la Feria</span></div>

            <div class="main">
                <a href="index.php" class="user"><i class="ri-user-fill"></i> <?php echo $_SESSION["usuario"]; ?></a>
                <a href="controlador/cont_sing_out.php">Cerrar Sesión</a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </header>

        <div class="jumbotron">
            <h4>Redes Sociales</h4>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Facebook</th>
                    <th>Twitter</th>
                    <th>Instagram</th>
                    <th>Página Web</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'database/conexion.php';

                    $sql_usuario = "SELECT * FROM usuarios WHERE usuario = '$_SESSION[usuario]'";
                    $resultado_usuario = mysqli_query($conexion, $sql_usuario);
                    $urow = mysqli_fetch_array($resultado_usuario);
                    $redes_id = $urow['redes_id']; 

                    $consulta = "SELECT * FROM redes_sociales WHERE id_red_social = $redes_id";
                    $resultado = mysqli_query($conexion, $consulta);
                    $row = mysqli_fetch_array($resultado);
                        $id_red_social = $row['id_red_social']; 
                        $facebook = $row['facebook'];
                        $twitter = $row['twitter']; 
                        $instagram = $row['instagram']; 
                        $pagina_web = $row['pagina_web'];
                ?>
                <tr>
                    <td><?php echo $id_red_social?></td>
                    <td><?php echo $facebook?></td>
                    <td><?php echo $twitter?></td>
                    <td><?php echo $instagram?></td>
                    <td><?php echo $pagina_web?></td>
                    <td>
                        <?php echo "<a class='green' href='controlador/cont_editar_redes.php?id=".$id_red_social."'>Editar</a>";?>
                        <?php echo "<a class='red' href='controlador/cont_eliminar_redes.php?id=".$id_red_social."' onclick='return confirmar()'>Eliminar</a>";?>
                    </td>
                </tr>
            </tbody>
        </table>

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
        header ("location: login.php");
        exit();
    }
?>
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
        <title>Sistema -- Feria Educativa</title>
        <link rel="shortcut icon" href="img/logo_paems.jpg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="css/sistema.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    </head>
    <body>       
        <header>
            <div class="logo"><span>Sistema de la Feria</span></div>

            <div class="main">
                <a href="index.php" class="user"><i class="ri-user-fill"></i> <?php echo $_SESSION["usuario"]; ?></a>
                <a href="controlador/cont_sing_out.php">Cerrar Sesión</a>
            </div>
        </header>

        <section>
            <div class="service">
                <div class="title">
                    <h1>Modificación de Datos de la Feria Educativa</h1>
                </div>
                <div class="box">
                    <div class="card">
                        <h2>Datos Escolares</h2>
                        <div class="pra">
                            <a class="button" href="modi_datos.php">Modificar</a>
                        </div>
                    </div>
                    <div class="card">
                        <h2>Redes Sociales</h2>
                        <div class="pra">
                            <a class="button" href="modi_redes.php">Modificar</a>
                        </div>
                    </div>
                    <div class="card">
                        <h2>Datos de Contacto</h2>
                        <div class="pra">
                            <a class="button" href="modi_contacto.php">Modificar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="title">
                    <h1>Modificación de Archivos de la Feria Educativa</h1>
                </div>
                <div class="box">
                    <div class="card">
                        <h2>Pabellon Tecnológico</h2>
                        <div class="pra">
                            <a class="button" href="modi_pabellon.php">Modificar</a>
                        </div>
                    </div>
                    <div class="card">
                        <h2>Instalaciones</h2>
                        <div class="pra">
                            <a class="button" href="modi_inst.php">Modificar</a>
                        </div>
                    </div>
                    <div class="card">
                        <h2>Logos Escolares</h2>
                        <div class="pra">
                            <a class="button" href="modi_logo.php">Modificar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="box">
                    <div class="card">
                        <h2>Actividades Culturales</h2>
                        <div class="pra">
                            <a class="button" href="modi_cultural.php">Modificar</a>
                        </div>
                    </div>
                    <div class="card">
                        <h2>Actividades Deportivas</h2>
                        <div class="pra">
                            <a class="button" href="modi_deporte.php">Modificar</a>
                        </div>
                    </div>
                    <div class="card">
                        <h2>Actividades Extracurricuales</h2>
                        <div class="pra">
                            <a class="button" href="modi_extra.php">Modificar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="box">
                    <div class="card">
                        <h2>Becas / Ofertas (PDF)</h2>
                        <div class="pra">
                            <a class="button" href="modi_pdf.php">Modificar</a>
                        </div>
                    </div>
                    <div class="card">
                        <h2>Previsualización</h2>
                        <div class="pra">
                            <a class="button" href="plantilla.php">Modificar</a>
                        </div>
                    </div>
                </div>
            </div>
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
        header ("location: login.php");
        exit();
    }
?>
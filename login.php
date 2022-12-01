<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="autor" content="Joel Josue Herrera Reyes y Jose Orlando Poot Dzul"/>
        <meta name="copyright" content="Servicios Educativos de Quintana Roo y la Universidad Autonoma del Estado de Quintana Roo"/> 
        <meta name="description" content="Feria de Orientación Educativa del Nivel Media Superior">
        <link rel="stylesheet" href="css/login.css">
        <title>Login - Feria Educativa</title>
        <link rel="shortcut icon" href="img/escudo_quintanaRoo.jpg" type="image/x-icon">
    </head>
    <body>
        <div class="loginbox">
            <img src="img/logo_paems.jpg" alt="" class="avatar">
            <h1>Inicio de Sesión</h1>
            <?php if(isset($_GET['error'])){ ?>
                    <p class="error"> <?php echo $_GET['error']; ?> </p>
                <?php } ?>
            <form action="controlador/cont_login.php" method="POST">
                <label>Usuario</label>
                <input type="text" name="usuario" placeholder="Nombre de Usuario">
                <label>Contraseña</label>
                <input type="password" name="contraseña" placeholder="Contraseña">
                <input name="login" type="submit" value="Iniciar Sesión">
            </form>
        </div>
    </body>
</html>
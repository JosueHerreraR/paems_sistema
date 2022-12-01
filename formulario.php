<?php 
    include 'database/conexion.php';
    
    if(isset($_GET['registrado'])){
        $mensage="<h3 id='alerta'>¡¡¡ DATOS REGISTRADOS !!!</h3>";
    }else{
        $mensage='';
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="autor" content="Joel Josue Herrera Reyes y Jose Orlando Poot Dzul"/>
        <meta name="copyright" content="Servicios Educativos de Quintana Roo y la Universidad Autonoma del Estado de Quintana Roo"/> 
        <meta name="description" content="Feria de Orientación Educativa del Nivel Media Superior">
        <title>Registro de datos de cada plantel</title>
        <link rel="shortcut icon" href="img/logo_paems.jpg" type="image/x-icon">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <div class="top-content">
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                    	<form role="form" action="controlador/cont_datos.php" method="post" class="f1" enctype="multipart/form-data">

                            <!-- Panel Principal => Indica en que paso esta el usuario: -->
                            <?php 
                                echo $mensage; //Esto se activara al momento de rellenar el formulario
                            ?>

                    		<h3>Registro de los Datos Escolares</h3>

                    		<div class="f1-steps">
                    			<div class="f1-progress">
                    			    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                    			</div>
                    			<div class="f1-step active">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>Paso 1</p>
                    			</div>
                    			<div class="f1-step">
                                    <i class="fa-solid fa-address-book"></i>
                    				<div class="f1-step-icon"><i class="fa fa-image"></i></div>
                    				<p>Paso 2</p>
                    			</div>
                    		    <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-cloud"></i></div>
                    				<p>Paso 3</p>
                    			</div>
                    		</div>
                    		
                            <div class="f1-steps">
                                <div class="form-group">
                                    <p>En caso de que no tenga uno de los datos para completar</p> 
                                    <p>el formulario, entonces escriba la palabra "No disponible".</p>
                                </div>
                            </div>
                    		
                            <!-- Parte 1 => Datos generales del plantel educativo: -->
                            <fieldset>
                                <br>
                    			<div class="form-group">
                    			    <label for="nombre_plantel">Nombre del Plantel Educativo:</label>
                                    <input type="text" name="nombre_plantel" placeholder="Nombre de la institución academica" class="f1-first-name form-control" id="nombre">
                                </div>
                                <div class="form-group">
                    			    <label for="sector_educativo">Municipio</label>
                                    <select name="sector_educativo" class="f1-first-name form-control" id="municipio" required>
                                        <?php
                                            include 'database/conexion.php';
                                            
                                            $sql_sector = "SELECT * FROM sector_educativo ORDER BY id_sector";
                                            $data_sector = mysqli_query($conexion, $sql_sector);
                                            while ($row = mysqli_fetch_array($data_sector)){
                                                $id = $row['id_sector']; 
                                                $nombre = $row['sector_educativo'];
                                        ?>
                                            <option value="<?php echo $id ?>"><?php echo $nombre?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                    			    <label for="municipio">Municipio</label>
                                    <select name="municipio" class="f1-first-name form-control" id="municipio" required>
                                        <?php
                                            include 'database/conexion.php';
                                            
                                            $sql_municipio = "SELECT * FROM municipios ORDER BY id_municipios";
                                            $data_municipio = mysqli_query($conexion, $sql_municipio);
                                            while ($row = mysqli_fetch_array($data_municipio)){
                                                $id = $row['id_municipios']; 
                                                $nombre = $row['municipio'];
                                        ?>
                                            <option value="<?php echo $id ?>"><?php echo $nombre?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="logo-escolar">Logo Escolar</label>
                                    <input type="file" accept='image/*' name="logo-escolar" class="f1-last-name form-control" id="logo_escolar">
                                </div>
                                <div class="form-group">
                                    <label for="bienvenidos">Video de Bienvenida de cada Plantel:</label>
                                    <input type="text" name="bienvenidos" placeholder="https://www.youtube.com/embed/" class="f1-last-name form-control" id="bienvenidos">
                                </div>
                                <div class="form-group">
                                    <label for="becas">PDF de las Becas que ofrecen el Plantel</label>
                                    <input type="file" accept='application/pdf' name="becas" placeholder="PDF de las Becas" class="f1-last-name form-control" id="becas">
                                </div>
                                <div class="form-group">
                    			    <label for="oferta_academica">PDF de la Oferta Educativa del Plantel:</label>
                                    <input type="file" accept='application/pdf' name="oferta_academica" placeholder="PDF de la oferta educativa" class="f1-first-name form-control" id="oferta_academica">
                                </div>
                                <div class="form-group">
                                    <label for="caso_exito">Video de "Casos de Exito" del Plantel:</label>
                                    <input type="text" name="caso_exito" placeholder="https://www.youtube.com/embed/" class="f1-last-name form-control" id="caso_exito">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next">Siguiente</button>
                                </div>
                            </fieldset>
                            <!-- Fin de la primera parte -->

                            <!--- Parte 2 => Imagenes del plantel -->
                            <fieldset>
                                <br>
                                <div class="form-group">
                                    <label for="inst">Instalaciones:</label>
                                    <input type="file" accept='image/*' name="inst1" class="f1-last-name form-control" id="inst1">
                                    <input type="file" accept='image/*' name="inst2" class="f1-email form-control" id="inst2">
                                    <input type="file" accept='image/*' name="inst3" class="f1-email form-control" id="inst3">
                                </div>
                                <div class="form-group">
                                    <label for="cultura">Actividades Culturales:</label>
                                    <input type="file" accept='image/*' name="cultura1" class="f1-email form-control" id="cultura1">
                                    <input type="file" accept='image/*' name="cultura2" class="f1-email form-control" id="cultura2">
                                    <input type="file" accept='image/*' name="cultura3" class="f1-email form-control" id="cultura3">
                                </div>
                                <div class="form-group">
                                    <label for="deporte">Actividades Deportivas:</label>
                                    <input type="file" accept='image/*' name="deporte1" class="f1-repeat-password form-control" id="deporte1">
                                    <input type="file" accept='image/*' name="deporte2" class="f1-repeat-password form-control" id="deporte2">
                                    <input type="file" accept='image/*' name="deporte3" class="f1-repeat-password form-control" id="deporte3">
                                </div>
                                <div class="form-group">
                                    <label for="extra">Actividades Extracurriculares:</label>
                                    <input type="file" accept='image/*' name="extra1" class="f1-email form-control" id="extra1">
                                    <input type="file" accept='image/*' name="extra2" class="f1-email form-control" id="extra2">
                                    <input type="file" accept='image/*' name="extra3" class="f1-email form-control" id="extra3">
                                </div>
                                <div class="form-group">
                                    <label for="pabellon">Pabellón Tecnológico:</label>
                                    <input type="file" accept='image/*' name="pabellon1" class="f1-email form-control" id="pabellon1">
                                    <input type="file" accept='image/*' name="pabellon2" class="f1-email form-control" id="pabellon2">
                                    <input type="file" accept='image/*' name="pabellon3" class="f1-email form-control" id="pabellon3">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Atrás</button>
                                    <button type="button" class="btn btn-next">Siguiente</button>
                                </div>
                            </fieldset>
                            <!-- Fin de la segunda parte -->

                            <!-- Parte 3 => Redes Sociales y Datos de contacto: -->
                            <fieldset>
                                <br>
                                <div class="form-group">
                                    <label for="facebook">Link de Facebook:</label>
                                    <input type="text" name="facebook" placeholder="https://www.facebook.com/" class="f1-facebook form-control" id="facebook">
                                </div>
                                <div class="form-group">
                                    <label for="twitter">Link de Twitter:</label>
                                    <input type="text" name="twitter" placeholder="https://twitter.com/" class="f1-twitter form-control" id="twitter">
                                </div>
                                <div class="form-group">
                                    <label for="instagram">Link de Instagram:</label>
                                    <input type="text" name="instagram" placeholder="https://www.instagram.com/" class="f1-instagram form-control" id="instagram">
                                </div>
                                <div class="form-group">
                                    <label for="tiktok">Link de TikTok:</label>
                                    <input type="text" name="tiktok" placeholder="https://www.tiktok.com/" class="f1-tiktok form-control" id="tiktok">
                                </div>
                                <div class="form-group">
                                    <label for="pagina_web">Link de Página web Escolar:</label>
                                    <input type="text" name="pagina_web" placeholder="https://pagina-escolar.com/" class="f1-pagina-escolar form-control" id="pagina_web">
                                </div>
                                <div class="form-group">
                                    <label for="direccion">Dirección:</label>
                                    <input type="text" name="direccion" placeholder="Dirección del plantel educativo" class="f1-direccion form-control" id="direccion">
                                </div>
                                <div class="form-group">
                                    <label for="whatsapp">Link del chat de WhatsApp:</label>
                                    <input type="text" name="whatsapp" placeholder="https://api.whatsapp.com/" class="f1-whatsapp form-control" id="whatsapp">
                                </div>
                                <div class="form-group">
                                    <label for="telefono">N° de Telefono de contacto:</label>
                                    <input type="text" name="telefono" placeholder="N° de Telefono" class="f1-telefono form-control" id="telefono">
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo escolar de contacto:</label>
                                    <input type="email" name="email" placeholder="Correo Electrónico" class="f1-email form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="gMaps">Link de la ubicación en Google Maps:</label>
                                    <input type="text" name="gMaps" placeholder="https://www.google.com/maps/embed/" class="f1-google-maps form-control" id="maps">
                                </div>
                            <!-- Fin de la Parte 3 -->
                            
                            <!-- Confirmación del envio de datos -->
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Atrás</button>
                                    <button type="submit" class="btn btn-submit">Guardar Información</button>
                                </div>
                            </fieldset>
                    	
                    	</form>
                    </div>
                </div>
            </div>
        </div>

        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>
</html>
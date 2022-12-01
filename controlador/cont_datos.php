<?php 
    
    //Recibe los datos de la sección Información:
    $nombre_plantel = $_POST['nombre_plantel'];
    $sector_educativo = $_POST['sector_educativo'];
    $municipio = $_POST['municipio'];
    $bienvenidos = $_POST['bienvenidos'];
    $caso_exito = $_POST['caso_exito'];
    
    //Recibe los datos de los PDF:
    $nombre_pdf_becas = $_FILES['becas']['name']; 
    $tipo_pdf_becas = $_FILES['becas']['type'];
    $tamaño_pdf_becas = $_FILES['becas']['size'];
    $nombre_pdf_oferta = $_FILES['oferta_academica']['name']; 
    $tipo_pdf_oferta = $_FILES['oferta_academica']['type'];
    $tamaño_pdf_oferta = $_FILES['oferta_academica']['size'];

    //Recibe los datos de las redes sociales:
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];
    $tiktok = $_POST['tiktok'];
    $pagina_web = $_POST['pagina_web'];
    $direccion = $_POST['direccion'];
    $whatsapp = $_POST['whatsapp'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $gMaps = $_POST['gMaps'];

    if($tamaño_pdf_becas || $tamaño_pdf_oferta <= 26214400){
        if($tipo_pdf_becas == "application/pdf" || $tipo_pdf_oferta == "application/pdf"){
            //Ruta de la carpeta de destino= "PDF":
            $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/Sistema_Feria/pdf_feria/';
            
            //Mover el PDF del directorio temporal al directorio escogido:
            move_uploaded_file($_FILES['becas']['tmp_name'],$carpeta_destino.$nombre_pdf_becas);
            move_uploaded_file($_FILES['oferta_academica']['tmp_name'],$carpeta_destino.$nombre_pdf_oferta);
        } else{
            echo "<div>Solo se pueden aceptar el formato PDF</div><br>";
        }
    } else{
        echo "<div>Error = El tamaño de uno de los PDF es demasiado grande.</div><br>";
    }

    //Recibe los datos del Logo Institucional:
    $nombre_logo = $_FILES['logo-escolar']['name']; 
    $tipo_logo = $_FILES['logo-escolar']['type'];
    $tamaño_logo = $_FILES['logo-escolar']['size'];

    if($tamaño_logo <= 26214400){
        if($tipo_logo == "image/jpeg" || $tipo_logo =="image/jpg" || $tipo_logo == "image/png" || $tipo_logo =="image/webb"){
            //Ruta de la carpeta del Logo Institucional:
            $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/Sistema_Feria/fotos_logos/';
            
            //Mover la imagen del directorio temporal al directorio escogido:
            move_uploaded_file($_FILES['logo-escolar']['tmp_name'],$carpeta_destino.$nombre_logo);
        } else{
            echo "<div>Para el Logo Institucional => solo se pueden subir los siguientes formatos de imagen: .jpg / .jpeg / .png / .webb</div><br>";
        }
    } else{
        echo "<div>Error = El tamaño de la imagen del 'Logo Institucional' es demasiado grande.</div><br>";
    }    

    //Recibe los datos de las imagenes de las Instalaciones:
    $nombre_inst_1 = $_FILES['inst1']['name']; 
    $tipo_inst_1 = $_FILES['inst1']['type'];
    $tamaño_inst_1 = $_FILES['inst1']['size'];
    $nombre_inst_2 = $_FILES['inst2']['name']; 
    $tipo_inst_2 = $_FILES['inst2']['type'];
    $tamaño_inst_2 = $_FILES['inst2']['size'];
    $nombre_inst_3 = $_FILES['inst3']['name']; 
    $tipo_inst_3 = $_FILES['inst3']['type'];
    $tamaño_inst_3 = $_FILES['inst3']['size'];

    if($tamaño_inst_1 || $tamaño_inst_2 || $tamaño_inst_3 <= 26214400){
        if($tipo_inst_1 == "image/jpeg" || $tipo_inst_1 =="image/jpg" || $tipo_inst_1 == "image/png" || $tipo_inst_1 =="image/webb" ||
           $tipo_inst_2 == "image/jpeg" || $tipo_inst_2 =="image/jpg" || $tipo_inst_2 == "image/png" || $tipo_inst_2 =="image/webb" ||
           $tipo_inst_3 == "image/jpeg" || $tipo_inst_3 =="image/jpg" || $tipo_inst_3 == "image/png" || $tipo_inst_3 =="image/webb"){
            //Ruta de la carpeta de las imagenes = "Instalaciones":
            $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/Sistema_Feria/fotos_instalaciones/';
            
            //Mover la imagen del directorio temporal al directorio escogido:
            move_uploaded_file($_FILES['inst1']['tmp_name'],$carpeta_destino.$nombre_inst_1);
            move_uploaded_file($_FILES['inst2']['tmp_name'],$carpeta_destino.$nombre_inst_2);
            move_uploaded_file($_FILES['inst3']['tmp_name'],$carpeta_destino.$nombre_inst_3);
        } else{
            echo "<div>Para las Instalaciones => solo se pueden subir los siguientes formatos de imagen: .jpg / .jpeg / .png / .webb</div><br>";
        }
    } else{
        echo "<div>Error = El tamaño de una de las imagenes 'Institucionales' es demasiado grande.</div><br>";
    }

    //Recibe los datos de las imagenes de las Actividades Culturales:
    $nombre_cultura_1 = $_FILES['cultura1']['name']; 
    $tipo_cultura_1 = $_FILES['cultura1']['type'];
    $tamaño_cultura_1 = $_FILES['cultura1']['size'];
    $nombre_cultura_2 = $_FILES['cultura2']['name']; 
    $tipo_cultura_2 = $_FILES['cultura2']['type'];
    $tamaño_cultura_2 = $_FILES['cultura2']['size'];
    $nombre_cultura_3 = $_FILES['cultura3']['name']; 
    $tipo_cultura_3 = $_FILES['cultura3']['type'];
    $tamaño_cultura_3 = $_FILES['cultura3']['size'];

    if($tamaño_cultura_1 || $tamaño_cultura_2 || $tamaño_cultura_3 <= 26214400){
        if($tipo_cultura_1 == "image/jpeg" || $tipo_cultura_1 =="image/jpg" || $tipo_cultura_1 == "image/png" || $tipo_cultura_1 =="image/webb" ||
           $tipo_cultura_2 == "image/jpeg" || $tipo_cultura_2 =="image/jpg" || $tipo_cultura_2 == "image/png" || $tipo_cultura_2 =="image/webb" ||
           $tipo_cultura_3 == "image/jpeg" || $tipo_cultura_3 =="image/jpg" || $tipo_cultura_3 == "image/png" || $tipo_cultura_3 =="image/webb"){
            //Ruta de la carpeta de las imagenes = "Actividades Culturales":
            $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/Sistema_Feria/fotos_cultural/';
            
            //Mover la imagen del directorio temporal al directorio escogido:
            move_uploaded_file($_FILES['cultura1']['tmp_name'],$carpeta_destino.$nombre_cultura_1);
            move_uploaded_file($_FILES['cultura2']['tmp_name'],$carpeta_destino.$nombre_cultura_2);
            move_uploaded_file($_FILES['cultura3']['tmp_name'],$carpeta_destino.$nombre_cultura_3);
        } else{
            echo "<div>Para las Actividades Culturales => solo se pueden subir los siguientes formatos de imagen: .jpg / .jpeg / .png / .webb</div><br>";
        }
    } else{
        echo "<div>Error = El tamaño de una de las imagenes 'Culturales' es demasiado grande.</div><br>";
    }

    //Recibe los datos de las imagenes de las Actividades Deportivas:
    $nombre_deporte_1 = $_FILES['deporte1']['name']; 
    $tipo_deporte_1 = $_FILES['deporte1']['type'];
    $tamaño_deporte_1 = $_FILES['deporte1']['size'];
    $nombre_deporte_2 = $_FILES['deporte2']['name']; 
    $tipo_deporte_2 = $_FILES['deporte2']['type'];
    $tamaño_deporte_2 = $_FILES['deporte2']['size'];
    $nombre_deporte_3 = $_FILES['deporte3']['name']; 
    $tipo_deporte_3 = $_FILES['deporte3']['type'];
    $tamaño_deporte_3 = $_FILES['deporte3']['size'];

    if($tamaño_deporte_1 || $tamaño_deporte_2 || $tamaño_deporte_3 <= 26214400){
        if($tipo_deporte_1 == "image/jpeg" || $tipo_deporte_1 =="image/jpg" || $tipo_deporte_1 == "image/png" || $tipo_deporte_1 =="image/webb" ||
           $tipo_deporte_2 == "image/jpeg" || $tipo_deporte_2 =="image/jpg" || $tipo_deporte_2 == "image/png" || $tipo_deporte_2 =="image/webb" ||
           $tipo_deporte_3 == "image/jpeg" || $tipo_deporte_3 =="image/jpg" || $tipo_deporte_3 == "image/png" || $tipo_deporte_3 =="image/webb"){
            //Ruta de la carpeta de las imagenes = "Actividades Deportivas":
            $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/Sistema_Feria/fotos_deportes/';
            
            //Mover la imagen del directorio temporal al directorio escogido:
            move_uploaded_file($_FILES['deporte1']['tmp_name'],$carpeta_destino.$nombre_deporte_1);
            move_uploaded_file($_FILES['deporte2']['tmp_name'],$carpeta_destino.$nombre_deporte_2);
            move_uploaded_file($_FILES['deporte3']['tmp_name'],$carpeta_destino.$nombre_deporte_3);
        } else{
            echo "<div>Para las Actividades Deportivas => solo se pueden subir los siguientes formatos de imagen: .jpg / .jpeg / .png / .webb</div><br>";
        }
    } else{
        echo "<div>Error = El tamaño de una de las imagenes 'Deportivas' es demasiado grande.</div><br>";
    }

    //Recibe los datos de las imagenes de las Actividades Extracurriculares:
    $nombre_extra_1 = $_FILES['extra1']['name']; 
    $tipo_extra_1 = $_FILES['extra1']['type'];
    $tamaño_extra_1 = $_FILES['extra1']['size'];
    $nombre_extra_2 = $_FILES['extra2']['name']; 
    $tipo_extra_2 = $_FILES['extra2']['type'];
    $tamaño_extra_2 = $_FILES['extra2']['size'];
    $nombre_extra_3 = $_FILES['extra3']['name']; 
    $tipo_extra_3 = $_FILES['extra3']['type'];
    $tamaño_extra_3 = $_FILES['extra3']['size'];

    if($tamaño_extra_1 || $tamaño_extra_2 || $tamaño_extra_3 <= 26214400){
        if($tipo_extra_1 == "image/jpeg" || $tipo_extra_1 =="image/jpg" || $tipo_extra_1 == "image/png" || $tipo_extra_1 =="image/webb" ||
           $tipo_extra_2 == "image/jpeg" || $tipo_extra_2 =="image/jpg" || $tipo_extra_2 == "image/png" || $tipo_extra_2 =="image/webb" ||
           $tipo_extra_3 == "image/jpeg" || $tipo_extra_3 =="image/jpg" || $tipo_extra_3 == "image/png" || $tipo_extra_3 =="image/webb"){
            //Ruta de la carpeta de las imagenes = "Actividades Extracurriculares":
            $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/Sistema_Feria/fotos_extracurricular/';
            
            //Mover la imagen del directorio temporal al directorio escogido:
            move_uploaded_file($_FILES['extra1']['tmp_name'],$carpeta_destino.$nombre_extra_1);
            move_uploaded_file($_FILES['extra2']['tmp_name'],$carpeta_destino.$nombre_extra_2);
            move_uploaded_file($_FILES['extra3']['tmp_name'],$carpeta_destino.$nombre_extra_3);
        } else{
            echo "<div>Para las Actividades Extracurriculares => solo se pueden subir los siguientes formatos de imagen: .jpg / .jpeg / .png / .webb</div><br>";
        }
    } else{
        echo "<div>Error = El tamaño de una de las imagenes 'Extracurriculares' es demasiado grande.</div><br>";
    }

    //Recibe los datos de las imagenes del Pabellon Tecnológico:
    $nombre_pabellon_1 = $_FILES['pabellon1']['name']; 
    $tipo_pabellon_1 = $_FILES['pabellon1']['type'];
    $tamaño_pabellon_1 = $_FILES['pabellon1']['size'];
    $nombre_pabellon_2 = $_FILES['pabellon2']['name']; 
    $tipo_pabellon_2 = $_FILES['pabellon2']['type'];
    $tamaño_pabellon_2 = $_FILES['pabellon2']['size'];
    $nombre_pabellon_3 = $_FILES['pabellon3']['name']; 
    $tipo_pabellon_3 = $_FILES['pabellon3']['type'];
    $tamaño_pabellon_3 = $_FILES['pabellon3']['size'];

    if($tamaño_pabellon_1 || $tamaño_pabellon_2 || $tamaño_pabellon_3 <= 26214400){
        if($tipo_pabellon_1 == "image/jpeg" || $tipo_pabellon_1 =="image/jpg" || $tipo_pabellon_1 == "image/png" || $tipo_pabellon_1 =="image/webb" ||
           $tipo_pabellon_2 == "image/jpeg" || $tipo_pabellon_2 =="image/jpg" || $tipo_pabellon_2 == "image/png" || $tipo_pabellon_2 =="image/webb" ||
           $tipo_pabellon_3 == "image/jpeg" || $tipo_pabellon_3 =="image/jpg" || $tipo_pabellon_3 == "image/png" || $tipo_pabellon_3 =="image/webb"){
            //Ruta de la carpeta de las imagenes = "Pabellon Tecnológico": 
            $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/Sistema_Feria/fotos_pabellon/';
            
            //Mover la imagen del directorio temporal al directorio escogido:
            move_uploaded_file($_FILES['pabellon1']['tmp_name'],$carpeta_destino.$nombre_pabellon_1);
            move_uploaded_file($_FILES['pabellon2']['tmp_name'],$carpeta_destino.$nombre_pabellon_2);
            move_uploaded_file($_FILES['pabellon3']['tmp_name'],$carpeta_destino.$nombre_pabellon_3);
        } else{
            echo "<div>Para los Pabellones Tecnológicos => solo se pueden subir los siguientes formatos de imagen: .jpg / .jpeg / .png / .webb</div><br>";
        }
    } else{
        echo "<div>Error = El tamaño de una de las imagenes del 'Pabellon Tecnológico' es demasiado grande.</div><br>";
    }

    //Conexión a la base de datos
    include "../database/conexion.php";
    
    $sql_datos = "INSERT INTO datos_escuelas (nombre_plantel, sector_educativo, municipio, bienvenidos, becas, oferta_educativa, caso_exito) 
        VALUES ('$nombre_plantel', '$sector_educativo', '$municipio', '$bienvenidos', '$nombre_pdf_becas', '$nombre_pdf_oferta', '$caso_exito')";
    $resultado_1 = mysqli_query($conexion, $sql_datos); 

    if($resultado_1 == 1){
        $sql_redes = "INSERT INTO redes_sociales (facebook, twitter, instagram, tiktok, pagina_web, direccion, whatsapp, telefono, email, maps) 
            VALUES ('$facebook', '$twitter', '$instagram', '$tiktok', '$pagina_web', '$direccion', '$whatsapp', '$telefono', '$email', '$gMaps')";
        $resultado_2 = mysqli_query($conexion, $sql_redes);
        if($resultado_2 == 2){
            $sql_imagenes = "INSERT INTO imagenes_escuelas (`logo_escolar`, `instalacion_1`, `instalacion_2`, `instalacion_3`, `cultural_1`, `cultural_2`, `cultural_3`, `deporte_1`, `deporte_2`, `deporte_3`, `curricular_1`, `curricular_2`, `curricular_3`, `pabellon_1`, `pabellon_2`, `pabellon_3`) 
                    VALUES ('$nombre_logo', '$nombre_inst_1', '$nombre_inst_2', '$nombre_inst_3', '$nombre_cultura_1', '$nombre_cultura_2', '$nombre_cultura_3', '$nombre_deporte_1', '$nombre_deporte_2', '$nombre_deporte_3', '$nombre_extra_1', '$nombre_extra_2', '$nombre_extra_3', '$nombre_pabellon_1', '$nombre_pabellon_2', '$nombre_pabellon_3')";
            $resultado_3 = mysqli_query($conexion, $sql_imagenes);
            if($resultado_3 == 3){
                echo "<script languaje='JavaScript'>alert('Los datos se guardaron correctamente.'); location.assign('../formulario.php?registrado');</script>";
            }
        }
    }else{
        echo "<script languaje='JavaScript'>alert('Los datos NO se guardaron correctamente.'); location.assign('../formulario.php?error');</script>";
    }

?>

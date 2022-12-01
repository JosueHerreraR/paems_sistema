<?php
    
    //Conexión a la base de datos
    session_start();
    include "../database/conexion.php";

    if(isset($_POST['usuario']) && isset($_POST['contraseña'])){
        
        function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $usuario = validate($_POST['usuario']);
        $contraseña = validate($_POST['contraseña']);

        if(empty($usuario)){
            echo "<script languaje='JavaScript'>alert('No ha ingresado un nombre de usuario.'); location.assign('../login.php?error=El campo Usuario esta vacio.');</script>";
            exit();

        } else if (empty($contraseña)){
            echo "<script languaje='JavaScript'>alert('No ha ingresado una contraseña.'); location.assign('../login.php?error=El campo Contraseña esta vacio.');</script>";
            exit ();

        } else{
            $sql_login = " SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña' ";
            $resultado = mysqli_query($conexion, $sql_login); 

            if(mysqli_num_rows($resultado) === 1){
                $row = mysqli_fetch_assoc($resultado);
                
                if($row['usuario'] === $usuario && $row['contraseña'] === $contraseña){
                    $_SESSION['usuario'] = $row['usuario'];
                    $_SESSION['id_usuario'] = $row['id_usuario'];
                    
                    echo "<script languaje='JavaScript'>alert('Acceso Concedido.'); location.assign('../index.php');</script>";
                    exit ();

                }else{
                    echo "<script languaje='JavaScript'>alert('El Usuario o Contraseña es incorrecto.'); location.assign('../login.php?error=El Usuario o Contraseña es incorrecto.');</script>";
                    exit ();

                }
            } else{
                echo "<script languaje='JavaScript'>alert('El Usuario o Contraseña es incorrecto.'); location.assign('../login.php?error=El Usuario o Contraseña es incorrecto.');</script>";
                exit ();
            }
        }
    } else{
        header ("location: ../login.php");
        exit();
    }

?>

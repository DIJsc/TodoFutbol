<?php

    if(isset($_POST['email']) && isset($_POST['nombre']) && isset($_POST['pass1']) && isset($_POST['pass2'])){
        $email =trim( $_POST['email']);
        $nombre =trim( $_POST['nombre']);
        $pass1 = trim($_POST['pass1']);
        $pass2 = trim($_POST['pass2']);
        if ($pass1 == $pass2) {
        //Conexion con bd
        include 'conexion.php';
        //Valido que el email ya no exista
        $sql = "SELECT mail FROM usuario WHERE mail = '".$email."'";
        if (!$resultado = $conexion->query($sql)) {
            //La consulta fallo 
            $error= "Lo sentimos, este sitio web está experimentando problemas.";
        }else{
            //Consulta no fallo
            if ($resultado->num_rows === 0) {
                //Se inserta en bd
                $sql = "INSERT INTO usuario(mail, nombreusuario, pass1) VALUES ('$email','$nombre','$pass1')";
                if (!$result = mysqli_query($conexion,$sql)) {
                    $error= "No se pudo completar el registro, lo sentimos, intentelo de nuevo";
                    $conexion->close();
                    //header('Location: ../index.html');
                }else {
                    echo "Todo funciono";
                    $conexion->close();
                    header('Location: ../usuarioreg.html');
                }
            }else{
                $error= "usuario existe";
                header('Location: ../index.html');
            }
        }
        $conexion->close();
    }else{
        echo "Las contraseñas no son iguales";
    }
    }else{
        $error="no recibí el usuario, digita algo por favor";
    }

?>
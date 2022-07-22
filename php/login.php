<?php
$error="";
// recibo por método post el email, el usuario y contraseña
if(isset($_POST['email']) && isset($_POST['pass1'])){
    $email =trim( $_POST['email']);
    $pass1 = trim($_POST['pass1'], PASSWORD_BCRYPT);
    //Conexion con bd
    include 'conexion.php';
    $sql = "SELECT pass1 FROM usuario WHERE mail = '".$email."'";

    if (!$resultado = $conexion->query($sql)) {
        //La consulta fallo 
        $error= "Lo sentimos, este sitio web está experimentando problemas.";
        
    }else{
        //Valido que el usuario exista
        if ($resultado->num_rows === 0) {
            //Ese usuario no existe. 
            $error= "Lo sentimos. El usuario $email no existe. Inténtelo de nuevo.";
        // 
        }else{
            //Usuario existe, valido la contraseña
            $vector = $resultado->fetch_assoc();
            if($vector != null && strcmp($vector['pass1'],$pass1)==0){
                //La contraseña ingresada por el usuario es igual a la de la BD
                $conexion->close();
                header('Location: ../usuarioreg.php');
            }else{
                $error="No se pudo completar tu log in, porfavor intentelo nuevamente   ";
            }
        }

        
    }
    $conexion->close();
}else{
    $error="Usuario no recibido, intente de nuevo";
}
echo $error;
?>
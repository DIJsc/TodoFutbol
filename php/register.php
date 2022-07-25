<?php

    /*if(isset($_POST['email']) && isset($_POST['nombre']) && isset($_POST['pass1']) && isset($_POST['pass2'])){
        $email =trim( $_POST['email']);
        $nombre =trim( $_POST['nombre']);
        $pass1 = trim($_POST['pass1'], PASSWORD_BCRYPT);
        $pass2 = trim($_POST['pass2']);
        if ($pass1 == $pass2) {
        //Conexion con bd
       // include 'conexion.php';
        include 'conexionPDO.php';
        $resultado = $conexion->prepare("CALL usuario(?, ?, ?, ?)");
        $sentencia->bindParam(1, $tipo); 
        $sentencia->bindParam(2, $email);
        $sentencia->bindParam(3, $nombre);
        $sentencia->bindParam(4, $pass1);
        */

        session_start();
        require_once 'conexionPDO.php';
        if(ISSET($_POST['register'])){
            if($_POST['email'] != "" || $_POST['nombre'] != "" || $_POST['pass1'] != "" || $_POST['pass2'] != ""){
                try{
                    $email =trim( $_POST['email']);
                    $nombre =trim( $_POST['nombre']);
                    $pass1 = trim($_POST['pass1']);
                    $pass2 = trim($_POST['pass2']);
                    // md5 encrypted
                    // $password = md5($_POST['pass1']);
                    if ($pass1 == $pass2){
                    $pass1 = $_POST['pass1'];
                    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = $conexion->prepare("CALL usuario(?, ?, ?, ?)");
                    $conexion->exec($sql);
                    }else{
                        echo "Las contraseñas no coinciden";
                        $conexion = null;
                    }
                }catch(PDOException $e){
                    echo $e->getMessage();
                }
                $_SESSION['message']=array("text"=>"User successfully created.","alert"=>"info");
                $conexion = null;
                header('location:usuarioreg.php');
            }else{
                echo "
                    <script>alert('Please fill up the required field!')</script>
                ";
            }
        }
     

?>
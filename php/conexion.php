<?php 

    $conexion = new mysqli("localhost","root","root","todofutbol"); 
  
    if(mysqli_connect_errno()){
        echo ('Error al conectarse'.mysqli_connect_error());
        exit();
    }

    
?>
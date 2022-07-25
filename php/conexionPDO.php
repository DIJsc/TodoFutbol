<?php
try {
    $conexion = new PDO('mysql:host=proyectosiep;dbname=proyectosiepcom_dij', "proyectosiepcom_dij", "T5*bX1eVfl8_");
    foreach($conexion->query('SELECT * from usuario') as $fila) {
        print_r($fila);
    }
    $conexion = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
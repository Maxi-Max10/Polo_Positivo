<?php

$user = "root";
$password = "";
$base_name = "base_polop";


try {
    $conexion = new mysqli("localhost",$user, $password, $base_name);

} catch (Exception $e) {
    printf("Fallo la conexión".$e->getMessage());
}



?>
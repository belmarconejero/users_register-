<?php
include 'datos_conexion.php';
$conexion = new mysqli($servidor,$usuario,$password,$basedatos);

if($conexion->connect_error){
    echo 'ha habido un error en la base de datos';
}

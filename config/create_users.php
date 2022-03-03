<?php
include '../db/conexion_db.php';
$sql= file_get_contents('../sql/create_user.sql');
//echo $sql;
$resultado = $conexion -> query($sql);

$conexion->close();


?>
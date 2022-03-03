<?php

include '../db/conexion_db.php';
$sql= file_get_contents('../sql/users_list.sql');
//var_dump($sql);
$resultado = $conexion->query($sql);
//var_dump($resultado);
if($resultado->num_rows > 0){
while($fila =$resultado->fetch_assoc()){
    $filas[] = $fila;
}
}
//var_dump($filas);

include '../views/user_list_vista.php'; 
$conexion-> close();
?>



<?php 
include '../db/conexion_db.php';
$sql = file_get_contents('../sql/create_table_users.sql');
$resultado = $conexion->multi_query($sql);
if($resultado){
    echo ' aplicacion instalada con exito';
}
$conexion->close();
?>
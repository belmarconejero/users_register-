
<div class="table-responsive">
<table class="table table-dark table-sm table-bordered">
  <thead>
    <tr>
      <th scope="col"><i class="bi bi-file-person-fill"> Nombre de usuario</th>
      <th scope="col"> Email</th>
      <th scope="col"> Password</th>
      <th scope="col"> Estado</th>
      <th scople="col"> Fecha de ingreso</th>
      <th scople="col"> Fecha de modificacion </th>
    </tr>
  </thead>
  <tbody>
  <?php
 //var_dump($filas);
for($i=0;$i<count($filas);$i++){
   $nombre =  $filas[$i]['user_name'];
   $email =  $filas[$i]['user_email'];
    $password = $filas[$i]['user_password'];
    $state= $filas[$i]['user_state'];
    $fecha_creacion= $filas[$i]['user_time_created'];
    $fecha_modificacion = $filas[$i]['user_time_updated'];
    ?>
 <tr><td> <?php echo $nombre ?> </td>
<td> <?php echo $email ?> </td>
<td> <?php echo $password ?> </td>
<td> <?php echo $state ?> </td>
<td> <?php echo $fecha_creacion ?> </td>
<td> <?php echo $fecha_modificacion ?> </td>
</tr>
    <?php
 }
    ?>
  </tbody>
</table>
</div> 
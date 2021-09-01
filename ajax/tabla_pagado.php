<?php require_once('../config/database.php'); ?>
<?php
$query_usuario= "SELECT * FROM db_usuarios_cobrar where estado='inactivo'";
$usuario= mysqli_query($mysqli, $query_usuario) or die(mysqli_error());
$row_datos= mysqli_fetch_assoc($usuario);
$totalRows_usuario= mysqli_num_rows($usuario);


?>



          <div class="table-responsive">
  <table class="table table-striped table-bordered" style="width:100%" id="mitabla">
    <thead>
      <tr style='color:white; background-color:#6082b4'>
        <th>Codigo</th>
        <th>Nombre Apellido</th>
        <th >Estado </th>
        <th >Prestado </th>
        <th >A Cobrar </th>
        <th>Recibido</th>
        <th>Por Cobrar</th>
        <th>Entregado</th>
        <th >Acciones</th>
    </tr>
    </thead>
  <tbody>
    <?php do {       ?> 
      <tr>
        <td> <a href="addcobro.php?form=vista&id=<?php echo $row_datos['codigo'];?>"><span class="fa fa-dollar" aria-hidden="true"></span><?php echo $row_datos['codigo']; ?></a> </td>
        <td><?php echo $row_datos['nombres']; ?> <?php echo $row_datos['apellidos']; ?></td>
        <td>
      <?php 
      if ($row_datos['estado'] == 'Activo') {
        echo '<span class="label label-primary">Activo</span>';
      } else if ($row_datos['estado'] == 'Inactivo') {
        echo '<span class="label label-danger">Inactivo</span>';
      } 
      ?>
      </td>
        <td>$.<?php echo number_format($row_datos['prestado']); ?></td>
        <td>$.<?php echo number_format($row_datos['acobrar']); ?></td>
        <td>$.<?php echo number_format($row_datos['recibido']); ?></td>             
        <td>$.<?php echo number_format($row_datos['acobrar'] - $row_datos['recibido']); ?></td>
        <td><?php echo $row_datos['fecha_entrega']; ?></td>  
          <td>
            <a type="button" class="btn btn-success btn-sm fun" data-toggle="modal" data-target="#editarcuenta<?php echo $row_datos['codigo'];?>">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
           
            <?php include("../modal/editar_cuenta.php");?>
            <?php include("../modal/add_usuario.php");?>
          </td>                        
        </tr>
 <?php } while ($row_datos = mysqli_fetch_assoc($usuario)); ?>    
        </tbody>
        
      </table>
      </div>

    <script>
  $(document).ready(function() {
    $('#mitabla').DataTable();
} );

</script>
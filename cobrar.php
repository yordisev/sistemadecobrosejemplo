<?php
include('includes/navbar.php');
if (empty($_SESSION['username']) && empty($_SESSION['password'])) {
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
?>


<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Afiliados<a class="btn btn-primary btn-social pull-right" href="" title="Agregar" data-toggle="modal" data-target="#registrarusuario"><i class="fa fa-plus"></i> Agregar </a></h3>

        </div>
    </div>

    <div class="panel-body">
    
    <div class="row">
 <div id="tabla_cobrar"></div>
  </div>

  <script>
  var URLactual = window.location;
  console.log(URLactual.toString().split('=')[2]);
  if (URLactual.toString().split('=')[1] == 1) {
    Swal.fire(
  'Exito',
  'Usuario Agregado',
  'success'
);
  } else if(URLactual.toString().split('=')[1] == 2){
    Swal.fire(
  'Exito',
  'Estado Actualizado',
  'success'
);
  }else if(URLactual.toString().split('=')[1] == 3){
    Swal.fire(
  'Error',
  'No se logro Actualizar',
  'error'
);
  }
</script>
    </div>
 

    <?php
    include('includes/scripts.php');
    ?>
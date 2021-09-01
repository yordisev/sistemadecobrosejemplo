<?php
include('includes/navbar.php');
if (empty($_SESSION['username']) && empty($_SESSION['password'])) {
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
?>


<div id="page-wrapper">


    <div class="panel-body">
    
    <div class="row">
 <div id="tabla_pagado"></div>
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
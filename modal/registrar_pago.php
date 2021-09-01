<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
  @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ MODAL SUBIR ARCHIVOS @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
  @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
  <form id="registrarpago<?php echo $row_datos['id_cuotas'];?>" data-smk-icon="glyphicon-remove" action="javascript:()">
      <!-- Modal -->
      <div id="registrarpago<?php echo $row_datos['id_cuotas'];?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="color:white; background-color: #4e5998;">
              <button type="button" class="close" data-dismiss="modal">x</button>
              <h4 class="modal-title">Subir Acta</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <label><b>NOMBRE</b></label>
                  <input type="text" class="form-control" id="por_pagar<?php echo $row_datos['id_cuotas'];?>" name="nombres"  value="<?php echo $row_datos['nombres'];?>"
    placeholder="Nombre" >
                </div>
                <div class="col-md-6">
                  <label><b>APELLIDO</b></label>
                  <input type="text" class="form-control" id="cuota_pagada<?php echo $row_datos['id_cuotas'];?>" name="apellidos"  value="<?php echo $row_datos['apellidos'];?>"
    placeholder="Apellido">
                </div>
                </div>
              </div>
              
              <br>
              <center>
               
                <button type="submit" class="btn btn-primary" id="btnEditar<?php echo $row_datos['id_usuario'];?>" style="margin-top: 12px;">Guardar</button>
              </center>

            </div>
          </div>

        </div>
      </div>
    </form>
        <!------------------ Fin Modal -------------------------------------->
					
<script>


$('#btnEditar<?php echo $row_datos['id_cuotas'];?>').click(function() {
    if ($('#formEditar<?php echo $row_datos['id_cuotas'];?>').smkValidate()) {
                 if( $.smkEqualPass('#pass1', '#pass2') ){

      // Code here
     var dataString=
        'nombre='+$('#nombre<?php echo $row_datos['id_cuotas'];?>').val()+
        '&apellido='+$('#apellido<?php echo $row_datos['id_cuotas'];?>').val()+
        '&sexo='+$('#sexo<?php echo $row_datos['id_cuotas'];?>').val()+
        '&estado='+$('#estado<?php echo $row_datos['id_cuotas'];?>').val()+
        '&fecha='+$('#fecha<?php echo $row_datos['id_cuotas'];?>').val()+
        '&usuario='+$('#usuario<?php echo $row_datos['id_cuotas'];?>').val()+
        '&pass2='+$('#pass2<?php echo $row_datos['codigo'];?>').val()+
        '&rol='+$('#rol<?php echo $row_datos['codigo'];?>').val()+
        '&viejo_usuario='+$('#viejo_usuario<?php echo $row_datos['codigo'];?>').val()+
        '&codigo='+$('#codigo<?php echo $row_datos['codigo'];?>').val();

    $.ajax({
        type:"POST",
        url:"ajax/editar_cuenta.php",
        data:dataString
    }).done(function(data){
      if(data==1){
          $.smkAlert({
          text: 'Excelente',
          type: 'success'
      });
        tabla_cobrar();
        $("#editarcuenta").modal('hide');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
			}
      else if(data==3){
           $.smkAlert({
           text: 'Usuario Duplicado',
           type: 'warning'
          });
      }
			else{
            $.smkAlert({
            text: 'Error',
            type: 'danger'
        });
			}
    })
  }
  }
});
</script>  
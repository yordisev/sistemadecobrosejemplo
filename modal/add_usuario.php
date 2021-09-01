
  <?php  
              $query_id = mysqli_query($mysqli, "SELECT RIGHT(codigo,4) as codigo FROM db_usuarios_cobrar
                                                ORDER BY codigo DESC LIMIT 1")
                                                or die('error '.mysqli_error($mysqli));

              $contar = mysqli_num_rows($query_id);
              if ($contar <> 0) {
                  $data_id = mysqli_fetch_assoc($query_id);
                  $codigo    = $data_id['codigo']+1;
              } else {
                  $codigo = 1;
              }
              $asignar_codigo   = str_pad($codigo, 4, "0", STR_PAD_LEFT);
              $codigo = "COBRO$asignar_codigo";
              ?>
  <form class="form-horizontal" method="POST" action="acciones/registrarusuario.php?act=insert">
      <!-- Modal -->
      <div id="registrarusuario" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="color:white; background-color: #4e5998;">
              <button type="button" class="close" data-dismiss="modal">x</button>
              <h4 class="modal-title">AÑADIR USUARIO</h4>
            </div>
            <div class="modal-body">
              <div class="form-group" style="margin-bottom: 16px">
              <div class="col-md-3">
                <label><b>CODIGO</b></label>
                  <input type="text" class="form-control" id="" name="codigo" value="<?php echo $codigo; ?>" readonly required>
                </div>
                <div class="col-md-3">
                  <label><b>NOMBRES</b></label>
                  <input type="text" class="form-control" id="" name="nombres"placeholder="Nombre">
                </div>
                <div class="col-md-3">
                  <label><b>APELLIDOS</b></label>
                  <input type="text" class="form-control" id="" name="apellidos"  placeholder="Apellido">
                </div>
                <div class="col-md-3">
                  <label><b>DIRECCION</b></label>
                  <input type="text" class="form-control" id="" name="direccion"  placeholder="Direccion">
                </div>
              </div>
              <div class="form-group" style="margin-bottom: 16px">
                <div class="col-md-3">
                  <label><b>ESTADO</b></label>
                  <select class="form-control" name="estado">
                                    <option value="">SELECCIONAR</option>
                                    <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                </select>
                </div>
                <div class="col-md-3">
                <label><b>PRESTADO</b></label>
                <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="number" name="prestado"  class="form-control">
                                        </div>
                                        </div>
                <div class="col-md-3">
                <label><b>ACOBRAR</b></label>
                <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="number" name="acobrar"  class="form-control">
                                        </div>
                                        </div>
                <div class="col-md-3">
                <label><b>RECIBIDO</b></label>
                <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="number" name="recibido"  class="form-control">
                                        </div>
                                        </div>
              
              </div>
              <div class="form-group" style="margin-bottom: 16px">
              <div class="col-sm-4">
                  <label><b>FECHA ENTREGA</b></label>
                  <input type="date" class="form-control" id="" name="fecha_entrega" placeholder="Fecha Entrega">
                </div>
                <div class="col-sm-4">
                  <label><b>FECHA PRIMERA CUOTA</b></label>
                  <input type="date" class="form-control" id="" name="fechapc"  placeholder="Fecha Primera Cuota">
                </div>
                <div class="col-sm-4">
                  <label><b>FECHA ULTIMA CUOTA</b></label>
                  <input type="date" class="form-control" id="" name="fechauc"placeholder="Fecha Ultima Cuota">
                </div>
              </div>
              <center>
               
                <button type="submit" class="btn btn-primary" name="Guardar" style="margin-top: 12px;">Guardar</button>
              </center>

            </div>
          </div>

        </div>
      </div>
    </form>
        <!------------------ Fin Modal -------------------------------------->

        
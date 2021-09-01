<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
  @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
  @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<form  class="form-horizontal" method="POST" action="acciones/registrarusuario.php?act=update">
  <!-- Modal -->
  <div id="editarcuenta<?php echo $row_datos['codigo']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="color:white; background-color: #5cb85c;">
          <button type="button" class="close" data-dismiss="modal">x</button>
          <h4 class="modal-title">Editar Usuario</h4>
        </div>
        <div class="modal-body">
          <div class="form-group" style="margin-bottom: 16px">
            <div class="row">
              <div class="col-md-3">
                <label><b>CODIGO</b></label>
                <input type="text" class="form-control" name="codigo" value="<?php echo $row_datos['codigo']; ?>" readonly>
              </div>
              <div class="col-md-3">
                <label><b>NOMBRES</b></label>
                <input type="text" class="form-control" name="nombres" value="<?php echo $row_datos['nombres']; ?>" readonly>
              </div>
              <div class="col-md-3">
                <label><b>APELLIDOS</b></label>
                <input type="text" class="form-control" name="apellidos" value="<?php echo $row_datos['apellidos']; ?>" readonly>
              </div>
              <div class="col-md-3">
                <label><b>DIRECCION</b></label>
                <input type="text" class="form-control" name="direccion" value="<?php echo $row_datos['direccion']; ?>">
              </div>
            </div>
          </div>
          <div class="form-group" style="margin-bottom: 16px">
            <div class="row">
              <div class="col-md-3">
                <label><b>ESTADO</b></label>
                <select class="form-control" name="estado">
                                    <option value="<?php echo $row_datos['estado']; ?>"><?php echo $row_datos['estado']; ?></option>
                                    <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                </select>
              </div>
              <div class="col-md-3">
                <label><b>PRESTADO</b></label>
                <div class="input-group">
                  <span class="input-group-addon">$</span>
                  <input type="text" name="prestado" value="<?php echo number_format($row_datos['prestado']); ?>" class="form-control" readonly>
                </div>
              </div>
              <div class="col-md-3">
                <label><b>ACOBRAR</b></label>
                <div class="input-group">
                  <span class="input-group-addon">$</span>
                  <input type="text" name="acobrar" value="<?php echo number_format($row_datos['acobrar']); ?>" class="form-control" readonly>
                </div>
              </div>
              <div class="col-md-3">
                <label><b>RECIBIDO</b></label>
                <div class="input-group">
                  <span class="input-group-addon">$</span>
                  <input type="text" name="recibido" value="<?php echo number_format($row_datos['recibido']); ?>" class="form-control" readonly>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label><b>FECHA ENTREGA</b></label>
                <input type="text" class="form-control" name="fecha_entrega" value="<?php echo $row_datos['fecha_entrega']; ?>" readonly>
              </div>
              <div class="col-md-4">
                <label><b>FECHA PRIMERA CUOTA</b></label>
                <input type="text" class="form-control" name="fechapc" value="<?php echo $row_datos['fechapc']; ?>" readonly>
              </div>
              <div class="col-md-4">
                <label><b>FECHA ULTIMA CUOTA</b></label>
                <input type="text" class="form-control" name="fechauc" value="<?php echo $row_datos['fechauc']; ?>" readonly>
              </div>
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
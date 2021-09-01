<?php

if ($_GET['form'] == 'add') { ?>

    <?php
    include('includes/navbar.php');
    ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Dashboard</h3>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Primary Panel
                </div>
                <div class="panel-body">
                    <form method="POST" action="acciones/afiliados.php?act=insert">
                        <div id="result"></div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Tipo de Documento</label>
                                    <select class="form-control" name="documento">
                                        <option value="">SELECCIONAR</option>
                                        <option value="CC">CEDULA DE CIUDADANIA</option>
                                        <option value="TI">TARJETA DE IDENTIDAD</option>
                                        <option value="RC">REGISTRO CIVIL</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Numero</label>
                                    <input type="text" class="form-control" name="numero" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Primer nombre</label>
                                    <input type="text" class="form-control" name="pnombre" autocomplete="off" onkeyup="mayus(this);" required>
                                </div>
                                <div class="col-md-3">
                                    <label>Segundo Nombre</label>
                                    <input type="text" class="form-control" name="snombre" autocomplete="off" onkeyup="mayus(this);" required>
                                </div>
                                <div class="col-md-3">
                                    <label>Primer Apellido</label>
                                    <input type="text" class="form-control" name="papellido" autocomplete="off" onkeyup="mayus(this);" required>
                                </div>
                                <div class="col-md-3">
                                    <label>Segundo Apellido</label>
                                    <input type="text" class="form-control" name="sapellido" autocomplete="off" onkeyup="mayus(this);" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Fecha de Nacimiento</label>
                                    <input type="date" class="form-control" name="fechan" autocomplete="off" required>
                                </div>
                                <div class="col-md-4">
                                    <label>Sexo</label>
                                    <select class="form-control" name="sexo">
                                        <option value="">SELECCIONAR</option>
                                        <option value="MASCULINO">MASCULINO</option>
                                        <option value="FEMENINO">FEMENINO</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Tipo de Sangre</label>
                                    <select class="form-control" name="tsangre">
                                        <option value="">RH</option>
                                        <option value="MASCULINO">O+</option>
                                        <option value="FEMENINO">O-</option>
                                        <option value="MASCULINO">A+</option>
                                        <option value="FEMENINO">A-</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Estado Civil</label>
                                    <select class="form-control" name="estadoc">
                                        <option value="">SELECCIONAR</option>
                                        <option value="SOLTERO">SOLTERO</option>
                                        <option value="CASADO">CASADO</option>
                                        <option value="UNION LIBRE">UNION LIBRE</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Telefono</label>
                                    <input type="text" class="form-control" name="telefono" autocomplete="off" required>
                                </div>
                                <div class="col-md-4">
                                    <label>Correo</label>
                                    <input type="text" class="form-control" name="correo" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Ciudad</label>
                                    <select class="form-control" name="ciudad">
                                        <option value="">SELECCIONAR</option>
                                        <option value="BARRANQUILLA">BARRANQUILLA</option>
                                        <option value="CARTAGENA">CARTAGENA</option>
                                        <option value="BOGOTA">BOGOTA</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label>Barrio</label>
                                    <input type="text" class="form-control" name="barrio" autocomplete="off" required>
                                </div>
                                <div class="col-md-3">
                                    <label>Direccion</label>
                                    <input type="text" class="form-control" name="direccion" autocomplete="off" required>
                                </div>
                                <div class="col-md-3">
                                    <label>Estado</label>
                                    <select class="form-control" name="estado">
                                        <option value="">SELECCIONAR</option>
                                        <option value="ACTIVO">ACTIVO</option>
                                        <option value="INACTIVO">INACTIVO</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="ln_solid"></div>




                </div>
                <div class="panel-footer">
                    <center>
                        <button type="submit" name="Guardar" class="btn btn-outline btn-primary">Guardar</button>
                        <a href="afiliados.php" class="btn btn-outline btn-danger">Atras</a>
                    </center>
                </div>
                </form>
            </div>
        </div>
        <?php
        include('includes/scripts.php');
        ?>

    <?php
} elseif ($_GET['form'] == 'vista') {
    if (isset($_GET['id'])) {

        include('includes/navbar.php');

        $id = mysqli_real_escape_string($mysqli, (strip_tags($_GET["id"], ENT_QUOTES)));
        $sql = mysqli_query($mysqli, "SELECT * FROM db_usuarios_cobrar WHERE codigo='$id'");
        if (mysqli_num_rows($sql) == 0) {
            header("Location: index.php");
        } else {
            $row = mysqli_fetch_assoc($sql);
        }
    }
    ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">HISTORIAL DE PAGO</h3>
                </div>
            </div>
            <form method="POST" action="acciones/afiliados.php?act=update">
                <div id="result"></div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label>CODIGO</label>
                            <input type="text" class="form-control" name="codigo" value="<?php echo $row['codigo']; ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label>NOMBRES</label>
                            <input type="text" class="form-control" name="nombres" value="<?php echo $row['nombres']; ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label>APELLIDOS</label>
                            <input type="text" class="form-control" name="apellidos" value="<?php echo $row['apellidos']; ?>" readonly>
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                    <div class="col-md-4">
                            <label>DIRECCION</label>
                            <input type="text" class="form-control" name="direccion" value="<?php echo $row['direccion']; ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label>ESTADO</label>
                            <input type="text" class="form-control" name="estado" value="<?php echo $row['estado']; ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label>PRESTADO</label>
                            <input type="text" class="form-control" name="prestado" value="$.<?php echo number_format($row['prestado']); ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group">
              <div class="row">
                <div class="col-md-4">
                  <label><b>FECHA ENTREGA</b></label>
                  <input type="text" class="form-control" name="fecha_entrega"  value="<?php echo $row['fecha_entrega'];?>" readonly>
                </div>
                <div class="col-md-4">
                  <label><b>FECHA PRIMERA CUOTA</b></label>
                  <input type="text" class="form-control"  name="fechapc"  value="<?php echo $row['fechapc'];?>" readonly>
                </div>
                <div class="col-md-4">
                  <label><b>FECHA ULTIMA CUOTA</b></label>
                  <input type="text" class="form-control"  name="fechauc"  value="<?php echo $row['fechauc'];?>" readonly>
                </div>
                </div>
              </div>
                <div class="form-group">

                
                <div class="col-md-3 col-md-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9 text-right">
                                    <div>Recibido</div>
                                    <div class="huge">$.<?php echo number_format($row['recibido']); ?></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9 text-right">
                                    <div>Cobrar</div>
                                    <div class="huge">$.<?php echo number_format($row['acobrar']-$row['recibido']); ?></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </form>
            
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-10">
                        <a href="" class="btn btn-outline btn-primary" data-toggle="modal" data-target="#add-stock">Añadir Pago</a>
                        <a href="cobrar.php" class="btn btn-outline btn-danger">Atras</a>
                    </div>
                </div>
           
            <?php
            $query = "SELECT * FROM db_cuotas_pagadas WHERE codigo='$id'";
            $resultado = mysqli_query($mysqli, $query) or die(mysqli_error());
            $row_datos = mysqli_fetch_assoc($resultado);

            ?>
            <table class="table table-striped table-bordered" style="width:100%" id="mitabla">
                <tr style="color:white; background-color:#6082b4">
                    <th class='text-center' colspan=7>HISTORIAL DE CUOTAS</th>
                </tr>
                <tr class='text-center' style="color:white; background-color:#6082b4">
                    <th>Codigo</th>
                    <th>usuario</th>
                    <th>Cuota Pagada </th>
                    <th>Estado</th>
                    <th>Fecha de Pago</th>
                </tr>

                <tbody>
                    <?php do {       ?>
                        <tr>
                            <td><?php echo $row_datos['codigo']; ?></td>
                            <td><?php echo $row_datos['usuario']; ?></td>
                            <td>$.<?php echo number_format($row_datos['recibido']); ?></td>
                            <td>
                                <?php
                                if ($row_datos['estado'] == 'Pagada') {
                                    echo '<span class="label label-primary">Pagada</span>';
                                } else if ($row_datos['estado'] == 'Debe') {
                                    echo '<span class="label label-danger">Debe</span>';
                                }
                                ?>
                            </td>
                            <td><?php echo $row_datos['fecha_pago']; ?></td>
                           
                        </tr>
                    <?php } while ($row_datos = mysqli_fetch_assoc($resultado)); ?>
                </tbody>
            </table>
            <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
			   @@@@@@@@@@@@@@@@@@@@@@ MODAL DE COMENTARIO @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
			   @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
            <form class="form-horizontal" method="POST" action="acciones/registrarpago.php?act=insert">
                <!-- Modal -->
                <div id="add-stock" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div style="color:white; background-color:#6082b4" class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h4 class="modal-title">Sumar Pago</h4>
                            </div>
                            <div class="modal-body">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Codigo</label>
                                            <input id="codigo<?php echo $row_datos['codigo']; ?>" name="codigo" class="form-control" value="<?php echo $row['codigo']; ?>" readonly>
                                        </div>
                                        <div class="col-md-6">
                <label><b>Cuota a Pagar</b></label>
                <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="number" name="recibido"  class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Estado</label>
                                            <input type="text" class="form-control" id="estado" name="estado" value="Pagada" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Fecha de Pago</label>
                                            <input type="date" class="form-control" id="fecha_pago" name="fecha_pago">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <input type="hidden" name="usuario" id="nombre" class="form-control" value="<?php echo $_SESSION['nombre']; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <button name="Guardar" type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
            <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->

        <?php
        include('includes/scripts.php');
        ?>
    <?php
}
    ?>
<?php
include('includes/navbar.php');
if (empty($_SESSION['username']) && empty($_SESSION['password'])) {
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
?>
<div id="page-wrapper">
    <div class="form-group">
        <div class="row">
            <div class="col-lg-12">

                <h3 class="page-header">Sistema De Cobro<a href="" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#add-stock"><i class="fa fa-plus"></i>Agendar Cita</a></h3>
            </div>
        </div>
    </div>
    
    <div class="row">

        <div class="col-lg-3 col-md-6">
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-dollar fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">$.700,000</div>
                            <div>Saldo Capital</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <?php
            $query = mysqli_query($mysqli, "SELECT SUM(acobrar) SUMcobrar FROM db_usuarios_cobrar WHERE estado='Activo'")
                or die('Error ' . mysqli_error($mysqli));
            $data1 = mysqli_fetch_assoc($query);
            $totalencaja = '49000';
            ?>
            <?php
            $query = mysqli_query($mysqli, "SELECT SUM(recibido) SUMrecibido FROM db_usuarios_cobrar WHERE estado='Activo'")
                or die('Error ' . mysqli_error($mysqli));
            $data = mysqli_fetch_assoc($query);
            ?>
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-check-square-o fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">$.<?php echo number_format($data1['SUMcobrar']-$data['SUMrecibido']+$totalencaja); ?></div>
                            <div>Saldo Total</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-info fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">$.<?php echo number_format($totalencaja); ?></div>
                            <div>Total Efectivo</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
        <?php
            $query = mysqli_query($mysqli, "SELECT SUM(acobrar) SUMcobrar FROM db_usuarios_cobrar WHERE estado='Activo'")
                or die('Error ' . mysqli_error($mysqli));
            $data1 = mysqli_fetch_assoc($query);
            ?>
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-support fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">$.<?php echo number_format($data1['SUMcobrar']-$data['SUMrecibido']); ?></div>
                            <div>Pendiente Por Cobrar</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <?php
    $html['POR ATENDER'] = '<span class="label label-primary">POR ATENDER</span>';
    $html['ATENDIDO'] = '<span class="label label-success">ATENDIDO</span>';
    $html['AUSENTE'] = '<span class="label label-danger">AUSENTE</span>';

    $salida = "";
    $query = "SELECT * FROM db_historial  WHERE DATE_FORMAT(diacita, '%Y-%m-%d') = CURDATE() order by horacita asc ";
    if (isset($_POST['consulta'])) {
        $q = $mysqli->real_escape_string($_POST['consulta']);
        $query = "SELECT * FROM db_historial WHERE diacita LIKE '%$q%' OR horacita LIKE '%$q%' OR especialidad LIKE '%$q%' OR especialista LIKE '%$q%' OR numero LIKE '$q' OR pnombre LIKE '%$q%' OR papellido LIKE '$q' OR estadocita LIKE '$q' ";
    }
    $resultado = $mysqli->query($query);
    ?>
    <?php
    if ($resultado->num_rows > 0) {
        $salida .= "<table class='table table-bordered table-striped' id='mitabla'>
  <thead>
  <tr style='color:white; background-color:#6082b4'>
      <th>No</th>
      <th>DIA</th>
      <th>HORA</th>
      <th>ESPECIALISTA</th>
      <th>CEDULA</th>
      <th>NOMBRE APELLIDO</th>
      <th>ESTADO</th>
      <th>ACCION</th>
  </tr>
</thead>

  <tbody>";
        $no = 1;
        while ($fila = $resultado->fetch_assoc()) {
            $salida .= '<tr>
      <td>' . $no . '</td>
            <td>' . $fila['diacita'] . '</td>
            <td>' . $fila['horacita'] . '</td>
            <td>' . $fila['especialista'] . '</td>
            <td>' . $fila['numero'] . '</td>
            <td>' . $fila['pnombre'] . '&nbsp' . $fila['papellido'] . '</td>
            <td>' . $html[$fila['estadocita']] . '</td>
            <td>
            
            
              <a href="editarafiliados.php?id=' . $fila['numero'] . '" title="Editar datos" class="btn btn-success  btn-sm"><span class="fa fa-edit" aria-hidden="true"></span></a>
            </td>
              </tr>';
            $no++;
        }
        $salida .= "</tbody></table>";
    } else {
        $salida .= "NO HAY DATOS :(";
    }
    echo $salida;

    $mysqli->close();


    ?>
    <script src="js/js/jquery.min.js"></script>
    <script src="js/js/jquery2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#mitabla').DataTable();
        });
    </script>
  
                   
        </div>
    
    <?php
    include('includes/scripts.php');
    ?>
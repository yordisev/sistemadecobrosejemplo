
<?php



require_once "../config/database.php";

    if ($_GET['act'] == 'insert') {
        if (isset($_POST['Guardar'])) {
            $codigo = mysqli_real_escape_string($mysqli, (strip_tags($_POST["codigo"], ENT_QUOTES))); //Escanpando caracteres 
            $nombres = mysqli_real_escape_string($mysqli, (strip_tags($_POST["nombres"], ENT_QUOTES))); //Escanpando caracteres 
            $apellidos = mysqli_real_escape_string($mysqli, (strip_tags($_POST["apellidos"], ENT_QUOTES))); //Escanpando caracteres 
            $direccion = mysqli_real_escape_string($mysqli, (strip_tags($_POST["direccion"], ENT_QUOTES))); //Escanpando caracteres 
            $estado = mysqli_real_escape_string($mysqli, (strip_tags($_POST["estado"], ENT_QUOTES))); //Escanpando caracteres 
            $prestado = mysqli_real_escape_string($mysqli, (strip_tags($_POST["prestado"], ENT_QUOTES))); //Escanpando caracteres 
            $acobrar = mysqli_real_escape_string($mysqli, (strip_tags($_POST["acobrar"], ENT_QUOTES))); //Escanpando caracteres 
            $recibido = mysqli_real_escape_string($mysqli, (strip_tags($_POST["recibido"], ENT_QUOTES))); //Escanpando caracteres 
            $fecha_entrega = mysqli_real_escape_string($mysqli, (strip_tags($_POST["fecha_entrega"], ENT_QUOTES))); //Escanpando caracteres 
            $fechapc = mysqli_real_escape_string($mysqli, (strip_tags($_POST["fechapc"], ENT_QUOTES))); //Escanpando caracteres 
            $fechauc = mysqli_real_escape_string($mysqli, (strip_tags($_POST["fechauc"], ENT_QUOTES))); //Escanpando caracteres 
            


            
                $insert = mysqli_query($mysqli, "INSERT INTO db_usuarios_cobrar(codigo,nombres,apellidos,direccion,estado,prestado,acobrar,recibido,fecha_entrega,fechapc,fechauc)
                                                        VALUES('$codigo','$nombres','$apellidos','$direccion','$estado','$prestado','$acobrar','$recibido','$fecha_entrega','$fechapc','$fechauc')") or die(mysqli_error());
                if ($insert) {
                    header("location: ../cobrar.php?alert=1");
                } else {
                    header("location: ../cobrar.php?alert=3");
                }
             
        }
    } elseif ($_GET['act'] == 'update') {
        if (isset($_POST['Guardar'])) {

			$codigo = mysqli_real_escape_string($mysqli, (strip_tags($_POST["codigo"], ENT_QUOTES))); //Escanpando caracteres 
            $nombres = mysqli_real_escape_string($mysqli, (strip_tags($_POST["nombres"], ENT_QUOTES))); //Escanpando caracteres 
            $apellidos = mysqli_real_escape_string($mysqli, (strip_tags($_POST["apellidos"], ENT_QUOTES))); //Escanpando caracteres 
            $direccion = mysqli_real_escape_string($mysqli, (strip_tags($_POST["direccion"], ENT_QUOTES))); //Escanpando caracteres 
            $estado = mysqli_real_escape_string($mysqli, (strip_tags($_POST["estado"], ENT_QUOTES))); //Escanpando caracteres 
            $fecha_entrega = mysqli_real_escape_string($mysqli, (strip_tags($_POST["fecha_entrega"], ENT_QUOTES))); //Escanpando caracteres 
            $fechapc = mysqli_real_escape_string($mysqli, (strip_tags($_POST["fechapc"], ENT_QUOTES))); //Escanpando caracteres 
            $fechauc = mysqli_real_escape_string($mysqli, (strip_tags($_POST["fechauc"], ENT_QUOTES))); //Escanpando caracteres 
            
				
				$update = mysqli_query($mysqli, "UPDATE db_usuarios_cobrar SET codigo = '$codigo',
				nombres      = '$nombres',
				apellidos    = '$apellidos',
				direccion    = '$direccion',
				estado       = '$estado',
				fecha_entrega    = '$fecha_entrega',
				fechapc    = '$fechapc',
				fechauc       = '$fechauc'
		  WHERE codigo    = '$codigo'") or die(mysqli_error());
				if($update){
					header("location: ../cobrar.php?alert=2");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
				}
        }
    } 

?>
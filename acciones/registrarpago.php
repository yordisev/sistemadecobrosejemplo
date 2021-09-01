<?php
require_once "../config/database.php";

if ($_GET['act'] == 'insert') {
	if (isset($_POST['Guardar'])) {
				$codigo = mysqli_real_escape_string($mysqli, (strip_tags($_POST["codigo"], ENT_QUOTES))); //Escanpando caracteres 
				$usuario = mysqli_real_escape_string($mysqli, (strip_tags($_POST["usuario"], ENT_QUOTES))); //Escanpando caracteres 
				$recibido = mysqli_real_escape_string($mysqli, (strip_tags($_POST["recibido"], ENT_QUOTES))); //Escanpando caracteres 
				$estado = mysqli_real_escape_string($mysqli, (strip_tags($_POST["estado"], ENT_QUOTES))); //Escanpando caracteres
				$fecha_pago = mysqli_real_escape_string($mysqli, (strip_tags($_POST["fecha_pago"], ENT_QUOTES))); //Escanpando caracteres 

					$insert = mysqli_query($mysqli, "INSERT INTO db_cuotas_pagadas(codigo,usuario,recibido,estado,fecha_pago)
															VALUES('$codigo','$usuario','$recibido','$estado',NOW())") or die(mysqli_connect_error());
					 
					 
					 $query = mysqli_query($mysqli, "UPDATE db_usuarios_cobrar SET recibido=recibido+'$recibido' WHERE codigo='$codigo'")
                or die('error ' . mysqli_error($mysqli));
					 

					 
					 if ($insert) {
						header('Location:' . getenv('HTTP_REFERER'));
					} else {
						header("location: ../cobrar.php?alert=3");
					}
				
			}
		}
			?>

			
<?php
	session_start();
	if($_SESSION['lleno']==1){

		header("Location:FormularioClaves.php");

		}
	if(isset($_POST['grabar1'])){

		require 'funciones.php';
		$verificar=verificar_repeticion($_POST['universidad'],$_POST['n_examen']);
		if($verificar!=0){
			$error = "Ya existe un examen del ".$_POST['n_examen'];
		}else{
			$error="";
			$_SESSION['universidad']=$_POST['universidad'];
			$_SESSION['examen']=$_POST['n_examen'];
			$_SESSION['comentario']=$_POST['comentar'];
			$_SESSION['lleno']=0;
			header("Location: FormularioClaves.php");
		}
	}else if(isset($_POST['atras'])){
			header('Location: logout.php');
		}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Análisis de Puntaje</title>
	<script type="text/javascript" src="js/scriptVerificacion.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<div><h2>Programa de Análisis de Puntaje v1</h2></div>
	<div>
		<form method="POST" name="forlumarioLLenadoDatos">
			<label>Universidad:</label>
			<select name="universidad">
				<option value="0">Elija un opción</option>
				<option value="UNALM">UNALM</option>
			</select>
			<span class="error" id="e1"></span>
			<br>
			<br>
			<label>Año de examen:</label>
			<input type="text" name="n_examen">
			<span class="error" id="e2"></span>
			<br>
			<br>
			<label>Comentario:</label>
			<br>
			<textarea name="comentar" rows="4" cols="30"></textarea>
			<br>
			<input type="submit" name="grabar1" value="Grabar" onclick="return validarDatos()" >
			<input type="submit" name="atras" value="Atras">
		</form>
	</div>
	<div class="error"><?php echo isset($error) ? utf8_decode($error): '' ?></div>
</body>

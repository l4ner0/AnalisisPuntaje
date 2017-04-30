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
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Análisis de Puntaje</title>
</head>
<body>
	<div><h2>Programa de Análisis de Puntaje v1</h2></div>
	<div>
		<form method="POST">
			<label>Universidad:</label>
				<select name="universidad">
				<option  selected="select">Elija un opción</option>
				<option>UNALM</option>
			<option>UNMSM</option>
		</select>
		<br>
		<br>
		<label>Año de examen:</label>
		<input type="text" name="n_examen">
		<br>
		<br>
		<label>Comentario:</label>
		<br>
		<textarea name="comentar" rows="4" cols="30"></textarea>
		<br>
		<input type="submit" name="grabar1" value="Grabar">
		</form>
	</div>
	<div style="font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error): '' ?></div>
</body>
</html>
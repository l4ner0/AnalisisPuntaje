<?php
	session_start();
	if($_SESSION['lleno']==1){

		header("Location:formulario1.php");

		}
	if(isset($_POST['grabar1'])){

		require 'funciones.php';
		$verificar=verificar_repeticion($_POST['n_examen']);
		if($verificar!=0){
			$error = "Ya existe un examen del ".$_POST['n_examen'];
		}else{
			$error="";
			$_SESSION['examen']=$_POST['n_examen'];
			$_SESSION['lleno']=0;
			header("Location: formulario1.php");
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
	<div><h2>Bienvenido al Programa de Análisi de Puntaje v1</h2></div>
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
		<br>
		<input type="submit" name="grabar1" value="Grabar">
		</form>
	</div>
	<div style="font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error): '' ?></div>
</body>
</html>
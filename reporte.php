<?php

	if(isset($_POST['buscar'])){
		include 'funciones.php';

		$numExamen=$_POST['reporteNumExamen'];

		verDatos($numExamen);
	}else if(isset($_POST['volver'])){
		header('Location: logout.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Reporte Puntaje</title>
</head>
<body>
	<h2>Reporte de Puntaje Obtenido</h2>
	<form method="POST">
		<label>Universidad: </label>
		<select name="reporteUniv">
			<option value="0">Elija una opción</option>
			<option value="UNALM">UNALM</option>
		</select><br>
		<label>Año de examen:</label>
		<select name="reporteNumExamen">
			<?php

				require 'conexion.php';

				$sql="SELECT examen FROM examen";

				$resultado=mysqli_query($conexion,$sql);
				
				do{
					$dato=mysqli_fetch_array($resultado);
					echo "<option>".$dato[0]."</option>";
				}while($dato[0]);
				

			?>
			<br>
		</select>
		<br>
		<input type="submit" name="buscar" value="Buscar">
		<input type="submit" name="volver" value="Atras">
	</form>
</body>
</html>
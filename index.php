<<<<<<< HEAD
<?php

	if(isset($_POST['ingresarPuntaje'])){

		header('Location: LLenadoDatos.php');
	
	}else if(isset($_POST['verPuntaje'])){
		header('Location: verDegradado.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bienvenida</title>
</head>
<body>
	<h2>Bienvenido <?php echo "USUARIO" ?> al programa de análisis de puntaje v1</h2>
	<form method="POST">
		<input type="submit" name="ingresarPuntaje" value="Nuevo Puntaje">
		<input type="submit" name="verPuntaje" value="Ver Puntaje">
	</form>
</body>
=======
<?php

	if(isset($_POST['ingresarPuntaje'])){

		header('Location: LLenadoDatos.php');
	
	}else if(isset($_POST['verPuntaje'])){
		header('Location: verDegradado.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bienvenida</title>
</head>
<body>
	<h2>Bienvenido <?php echo "USUARIO" ?> al programa de análisis de puntaje v1</h2>
	<form method="POST">
		<input type="submit" name="ingresarPuntaje" value="Nuevo Puntaje">
		<input type="submit" name="verPuntaje" value="Ver Puntaje">
	</form>
</body>
>>>>>>> e812d49c89e6e2fa8074a6166f68d18f8f3f454e
</html>
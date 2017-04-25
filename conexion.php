<?php 

	$conexion = new mysqli("localhost","root","","analisis_puntaje");

	if(mysqli_connect_errno()){

		echo "Conexión fallida !...",mysqli_connect_error();
		exit();
	}
?>
<?php
	function grabarDatos($n_examen,$alg,$arit,$bio,$fis,$geo,$quim,$rm,$rv,$trigo){
		require 'conexion.php';
		$sql_algebra="INSERT INTO algebra (n_examen,buenas,malas,no_contestadas) VALUES ('$n_examen',$alg[0],$alg[1],
		$alg[2])";
		$sql_arit="INSERT INTO aritmetica (n_examen,buenas,malas,no_contestadas) VALUES ('$n_examen',$arit[0],$arit[1],
		$arit[2])";
		$sql_bio="INSERT INTO biologia (n_examen,buenas,malas,no_contestadas) VALUES ('$n_examen',$bio[0],$bio[1],
		$bio[2])";
		$sql_fis="INSERT INTO fisica (n_examen,buenas,malas,no_contestadas) VALUES ('$n_examen',$fis[0],$fis[1],
		$fis[2])";
		$sql_geo="INSERT INTO geometria (n_examen,buenas,malas,no_contestadas) VALUES ('$n_examen',$geo[0],$geo[1],
		$geo[2])";
		$sql_quim="INSERT INTO quimica (n_examen,buenas,malas,no_contestadas) VALUES ('$n_examen',$quim[0],$quim[1],
		$quim[2])";
		$sql_rm="INSERT INTO razonamiento_matematico (n_examen,buenas,malas,no_contestadas) VALUES ('$n_examen',$rm[0],
		$rm[1],$rm[2])";
		$sql_rv="INSERT INTO razonamiento_verbal (n_examen,buenas,malas,no_contestadas) VALUES ('$n_examen',$rv[0],
		$rv[1],$rv[2])";
		$sql_trigo="INSERT INTO trigonometria (n_examen,buenas,malas,no_contestadas) VALUES ('$n_examen',$trigo[0],
		$trigo[1],$trigo[2])";

		mysqli_query($conexion,$sql_algebra);
		mysqli_query($conexion,$sql_arit);
		mysqli_query($conexion,$sql_bio);
		mysqli_query($conexion,$sql_fis);
		mysqli_query($conexion,$sql_geo);
		mysqli_query($conexion,$sql_quim);
		mysqli_query($conexion,$sql_rm);
		mysqli_query($conexion,$sql_rv);
		mysqli_query($conexion,$sql_trigo);
		mysqli_close($conexion);

	}

	function verDatos($num_examen){

		require 'conexion.php';

		$sql_algebra="SELECT buenas, malas, no_contestadas FROM algebra WHERE n_examen='$num_examen'";
		$sql_arit="SELECT buenas, malas, no_contestadas FROM aritmetica WHERE n_examen='$num_examen'";
		$sql_bio="SELECT buenas, malas, no_contestadas FROM biologia WHERE n_examen='$num_examen'";
		$sql_fis="SELECT buenas, malas, no_contestadas FROM fisica WHERE n_examen='$num_examen'";
		$sql_geo="SELECT buenas, malas, no_contestadas FROM geometria WHERE n_examen='$num_examen'";
		$sql_quim="SELECT buenas, malas, no_contestadas FROM quimica WHERE n_examen='$num_examen'";
		$sql_rm="SELECT buenas, malas, no_contestadas FROM razonamiento_matematico WHERE n_examen='$num_examen'";
		$sql_rv="SELECT buenas, malas, no_contestadas FROM razonamiento_verbal WHERE n_examen='$num_examen'";
		$sql_trigo="SELECT buenas, malas, no_contestadas FROM trigonometria WHERE n_examen='$num_examen'";

		$resultado_algebra=mysqli_query($conexion,$sql_algebra);
		$resultado_arit=mysqli_query($conexion,$sql_arit);
		$resultado_bio=mysqli_query($conexion,$sql_bio);
		$resultado_fis=mysqli_query($conexion,$sql_fis);
		$resultado_geo=mysqli_query($conexion,$sql_geo);
		$resultado_quim=mysqli_query($conexion,$sql_quim);
		$resultado_rm=mysqli_query($conexion,$sql_rm);
		$resultado_rv=mysqli_query($conexion,$sql_rv);
		$resultado_trigo=mysqli_query($conexion,$sql_trigo);

		$datos_algebra=mysqli_fetch_row($resultado_algebra);
		$datos_arit=mysqli_fetch_row($resultado_arit);
		$datos_bio=mysqli_fetch_row($resultado_bio);
		$datos_fis=mysqli_fetch_row($resultado_fis);
		$datos_geo=mysqli_fetch_row($resultado_geo);
		$datos_quim=mysqli_fetch_row($resultado_quim);
		$datos_rm=mysqli_fetch_row($resultado_rm);
		$datos_rv=mysqli_fetch_row($resultado_rv);
		$datos_trigo=mysqli_fetch_row($resultado_trigo);

		include 'verDegradado.php';

		verDegradado($datos_rv,$datos_rm,$datos_algebra,$datos_arit,$datos_geo,$datos_trigo,$datos_fis,$datos_quim,
			$datos_bio);
		
		mysqli_close($conexion);

	}

	function modificarDatos($n_examen,$alg,$arit,$bio,$fis,$geo,$quim,$rm,$rv,$trigo){

		require 'conexion.php';

		$sql_algebra="UPDATE algebra SET buenas=$alg[0], malas=$alg[1], no_contestadas=$alg[2] 
		WHERE n_examen='$n_examen'";

		$sql_arit="UPDATE aritmetica SET buenas=$arit[0], malas=$arit[1], no_contestadas=$arit[2] 
		WHERE n_examen='$n_examen'";

		$sql_bio="UPDATE biologia SET buenas=$bio[0], malas=$bio[1], no_contestadas=$bio[2] 
		WHERE n_examen='$n_examen'";

		$sql_fis="UPDATE fisica SET buenas=$fis[0], malas=$fis[1], no_contestadas=$fis[2] 
		WHERE n_examen='$n_examen'";

		$sql_geo="UPDATE geometria SET buenas=$geo[0], malas=$geo[1], no_contestadas=$geo[2] 
		WHERE n_examen='$n_examen'";

		$sql_quim="UPDATE quimica SET buenas=$quim[0], malas=$quim[1], no_contestadas=$quim[2] 
		WHERE n_examen='$n_examen'";

		$sql_rm="UPDATE razonamiento_matematico SET buenas=$rm[0], malas=$rm[1], no_contestadas=$rm[2] 
		WHERE n_examen='$n_examen'";

		$sql_rv="UPDATE razonamiento_verbal SET buenas=$rv[0], malas=$rv[1], no_contestadas=$rv[2] 
		WHERE n_examen='$n_examen'";

		$sql_trigo="UPDATE trigonometria SET buenas=$trigo[0], malas=$trigo[1], no_contestadas=$trigo[2] 
		WHERE n_examen='$n_examen'";

		mysqli_query($conexion,$sql_algebra);
		mysqli_query($conexion,$sql_arit);
		mysqli_query($conexion,$sql_bio);
		mysqli_query($conexion,$sql_fis);
		mysqli_query($conexion,$sql_geo);
		mysqli_query($conexion,$sql_quim);
		mysqli_query($conexion,$sql_rm);
		mysqli_query($conexion,$sql_rv);
		mysqli_query($conexion,$sql_trigo);
		mysqli_close($conexion);
	}

	function verificar_repeticion($univ,$n_examen){

		require 'conexion.php';

		$sql="SELECT * FROM examen WHERE examen='$n_examen' AND universidad= '$univ'";
		$resultado=mysqli_query($conexion,$sql);

		return mysqli_fetch_row($resultado);

		mysqli_close($conexion);
	}

	function agregar_datos_examen($univ,$n_examen,$coment){

		require 'conexion.php';

		$sql="INSERT INTO examen (examen,universidad,comentario) VALUES ('$n_examen', '$univ', '$coment')";

		mysqli_query($conexion,$sql);

		mysqli_close($conexion);
	}

?>
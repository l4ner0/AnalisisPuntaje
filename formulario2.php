<?php
	
	if(isset($_POST['grabar'])){

		session_start();
		$respuestas=array();

		 for($i=1; $i<101; $i++){

		 	$respuestas[$i]=$_POST["$i"];
		 }

		 $_SESSION['respuestas']=$respuestas;

		header("Location: analizaData.php");
	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ingreso de Respuestas</title>
</head>
<script language="JavaScript">
	<!--
	var era;
	var previo=null;
	function uncheckRadio(rbutton){
	if(previo &&previo!=rbutton){previo.era=false;}
	if(rbutton.checked==true && rbutton.era==true){rbutton.checked=false;}
	rbutton.era=rbutton.checked;
	previo=rbutton;
	}
	//-->
</script>
<body>
	<form method="POST">
		<div>
			<h2>Ingreso de Respuestas</h2>
		</div>

		<div>
			<fieldset>
				<legend>Razonamiento Verbal</legend>
				<?php

				for($i=1;$i<16;$i++){
					
					echo  "<label>".$i.")"."<label>";
				

				echo '<input type="radio" name="'.$i.'" value="A" onclick="uncheckRadio(this)">A';
				echo '<input type="radio" name="'.$i.'" value="B" onclick="uncheckRadio(this)">B';
				echo '<input type="radio" name="'.$i.'" value="C" onclick="uncheckRadio(this)">C';
				echo '<input type="radio" name="'.$i.'" value="D" onclick="uncheckRadio(this)">D';
				echo '<input type="radio" name="'.$i.'" value="E" onclick="uncheckRadio(this)">E';

				
					echo "<br>";
					}
				?>

			</fieldset>

			<fieldset>
				<legend>Razonamiento Matemático</legend>
				<?php

				for($i=16;$i<31;$i++){
					
					echo  "<label>".$i.")"."<label>";
				

				echo '<input type="radio" name="'.$i.'" value="A" onclick="uncheckRadio(this)">A';
				echo '<input type="radio" name="'.$i.'" value="B" onclick="uncheckRadio(this)">B';
				echo '<input type="radio" name="'.$i.'" value="C" onclick="uncheckRadio(this)">C';
				echo '<input type="radio" name="'.$i.'" value="D" onclick="uncheckRadio(this)">D';
				echo '<input type="radio" name="'.$i.'" value="E" onclick="uncheckRadio(this)">E';

				
					echo "<br>";
					}
				?>

			</fieldset>
			
			<fieldset>
				<legend>Álgebra</legend>
				<?php

				for($i=31;$i<41;$i++){
					
					echo  "<label>".$i.")"."<label>";
				

				echo '<input type="radio" name="'.$i.'" value="A" onclick="uncheckRadio(this)">A';
				echo '<input type="radio" name="'.$i.'" value="B" onclick="uncheckRadio(this)">B';
				echo '<input type="radio" name="'.$i.'" value="C" onclick="uncheckRadio(this)">C';
				echo '<input type="radio" name="'.$i.'" value="D" onclick="uncheckRadio(this)">D';
				echo '<input type="radio" name="'.$i.'" value="E" onclick="uncheckRadio(this)">E';

				
					echo "<br>";
					}
				?>

			</fieldset>
			
			<fieldset>
				<legend>Aritmética</legend>
				<?php

				for($i=41;$i<49;$i++){
					
					echo  "<label>".$i.")"."<label>";
				

				echo '<input type="radio" name="'.$i.'" value="A" onclick="uncheckRadio(this)">A';
				echo '<input type="radio" name="'.$i.'" value="B" onclick="uncheckRadio(this)">B';
				echo '<input type="radio" name="'.$i.'" value="C" onclick="uncheckRadio(this)">C';
				echo '<input type="radio" name="'.$i.'" value="D" onclick="uncheckRadio(this)">D';
				echo '<input type="radio" name="'.$i.'" value="E" onclick="uncheckRadio(this)">E';

				
					echo "<br>";
					}
				?>

			</fieldset>
			
			<fieldset>
				<legend>Geometría</legend>
				<?php

				for($i=49;$i<57;$i++){
					
					echo  "<label>".$i.")"."<label>";
				

				echo '<input type="radio" name="'.$i.'" value="A" onclick="uncheckRadio(this)">A';
				echo '<input type="radio" name="'.$i.'" value="B" onclick="uncheckRadio(this)">B';
				echo '<input type="radio" name="'.$i.'" value="C" onclick="uncheckRadio(this)">C';
				echo '<input type="radio" name="'.$i.'" value="D" onclick="uncheckRadio(this)">D';
				echo '<input type="radio" name="'.$i.'" value="E" onclick="uncheckRadio(this)">E';

				
					echo "<br>";
					}
				?>

			</fieldset>

			<fieldset>
				<legend>Trigonometría</legend>
				<?php

				for($i=57;$i<65;$i++){
					
					echo  "<label>".$i.")"."<label>";
				

				echo '<input type="radio" name="'.$i.'" value="A" onclick="uncheckRadio(this)">A';
				echo '<input type="radio" name="'.$i.'" value="B" onclick="uncheckRadio(this)">B';
				echo '<input type="radio" name="'.$i.'" value="C" onclick="uncheckRadio(this)">C';
				echo '<input type="radio" name="'.$i.'" value="D" onclick="uncheckRadio(this)">D';
				echo '<input type="radio" name="'.$i.'" value="E" onclick="uncheckRadio(this)">E';

				
					echo "<br>";
					}
				?>

			</fieldset>

			<fieldset>
				<legend>Física</legend>
				<?php

				for($i=65;$i<77;$i++){
					
					echo  "<label>".$i.")"."<label>";
				

				echo '<input type="radio" name="'.$i.'" value="A" onclick="uncheckRadio(this)">A';
				echo '<input type="radio" name="'.$i.'" value="B" onclick="uncheckRadio(this)">B';
				echo '<input type="radio" name="'.$i.'" value="C" onclick="uncheckRadio(this)">C';
				echo '<input type="radio" name="'.$i.'" value="D" onclick="uncheckRadio(this)">D';
				echo '<input type="radio" name="'.$i.'" value="E" onclick="uncheckRadio(this)">E';
				
					echo "<br>";
					}
				?>

			</fieldset>

			<fieldset>
				<legend>Química</legend>
				<?php

				for($i=77;$i<89;$i++){
					
					echo  "<label>".$i.")"."<label>";
				

				echo '<input type="radio" name="'.$i.'" value="A" onclick="uncheckRadio(this)">A';
				echo '<input type="radio" name="'.$i.'" value="B" onclick="uncheckRadio(this)">B';
				echo '<input type="radio" name="'.$i.'" value="C" onclick="uncheckRadio(this)">C';
				echo '<input type="radio" name="'.$i.'" value="D" onclick="uncheckRadio(this)">D';
				echo '<input type="radio" name="'.$i.'" value="E" onclick="uncheckRadio(this)">E';
				
					echo "<br>";
					}
				?>

			</fieldset>

			<fieldset>
				<legend>Biología</legend>
				<?php

				for($i=89;$i<101;$i++){
					
					echo  "<label>".$i.")"."<label>";
				

				echo '<input type="radio" name="'.$i.'" value="A" onclick="uncheckRadio(this)">A';
				echo '<input type="radio" name="'.$i.'" value="B" onclick="uncheckRadio(this)">B';
				echo '<input type="radio" name="'.$i.'" value="C" onclick="uncheckRadio(this)">C';
				echo '<input type="radio" name="'.$i.'" value="D" onclick="uncheckRadio(this)">D';
				echo '<input type="radio" name="'.$i.'" value="E" onclick="uncheckRadio(this)">E';

				
					echo "<br>";
					}
				?>

			</fieldset>

		</div>
		<div>
			<input type="submit" name="grabar" value="Grabar">
		</div>
	</form>
</body>
</html>
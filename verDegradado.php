<?php
	function verDegradado($num_examen,$rv,$rm,$algebra,$arit,$geo,$trigo,$fis,$quim,$bio){
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Información de Puntaje </title>
</head>
<body>
	<h2>Información Puntaje <?php echo $num_examen; ?></h2>
	<table border="1px">
		<tr>
			<td colspan="3">RV</td>
			<td colspan="3">RM</td>
			<td colspan="3">Algebra</td>
			<td colspan="3">Aritmetica</td>
			<td colspan="3">Geometría</td>
			<td colspan="3">Trigo</td>
			<td colspan="3">Física</td>
			<td colspan="3">Química</td>
			<td colspan="3">Biología</td>
		</tr>
		<tr>
			<?php
				for($j=1;$j<10;$j++){
			?>
			<td>B</td>
			<td>M</td>
			<td>NC</td>
			<?php
				}
			?>
		</tr>

		<tr>
			<td><?php echo $rv[0] ?></td>
			<td><?php echo $rv[1] ?></td>
			<td><?php echo $rv[2] ?></td>

			<td><?php echo $rm[0] ?></td>
			<td><?php echo $rm[1] ?></td>
			<td><?php echo $rm[2] ?></td>

			<td><?php echo $algebra[0] ?></td>
			<td><?php echo $algebra[1] ?></td>
			<td><?php echo $algebra[2] ?></td>

			<td><?php echo $arit[0] ?></td>
			<td><?php echo $arit[1] ?></td>
			<td><?php echo $arit[2] ?></td>

			<td><?php echo $geo[0] ?></td>
			<td><?php echo $geo[1] ?></td>
			<td><?php echo $geo[2] ?></td>

			<td><?php echo $trigo[0] ?></td>
			<td><?php echo $trigo[1] ?></td>
			<td><?php echo $trigo[2] ?></td>

			<td><?php echo $fis[0] ?></td>
			<td><?php echo $fis[1] ?></td>
			<td><?php echo $fis[2] ?></td>

			<td><?php echo $quim[0] ?></td>
			<td><?php echo $quim[1] ?></td>
			<td><?php echo $quim[2] ?></td>

			<td><?php echo $bio[0] ?></td>
			<td><?php echo $bio[1] ?></td>
			<td><?php echo $bio[2] ?></td>
		</tr>

	</table>
	<form action="logout.php" method="POST" >
		<input type="submit" name="regresar" value="Volver Inicio">
	</form>
</body>
</html>
<?php
	}
?>


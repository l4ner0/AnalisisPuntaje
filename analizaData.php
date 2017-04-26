<?php

	session_start();

		$claves=$_SESSION['claves'];
		$respuestas=$_SESSION['respuestas'];
		
		$alg=array(0,0,0);
		$arit=array(0,0,0);
		$bio=array(0,0,0);
		$fis=array(0,0,0);
		$geo=array(0,0,0);
		$quim=array(0,0,0);
		$rm=array(0,0,0);
		$rv=array(0,0,0);
		$trigo=array(0,0,0);

		for($i=1;$i<16;$i++){

			if($claves[$i]==$respuestas[$i]){
				$rv[0]=$rv[0]+1;
			}else if($respuestas[$i]==""){
				$rv[2]=$rv[2]+1;
			}else{
				$rv[1]=$rv[1]+1;
			}
		}

		for($i=16;$i<31;$i++){

			if($claves[$i]==$respuestas[$i]){
				$rm[0]=$rm[0]+1;
			}else if($respuestas[$i]==""){
				$rm[2]=$rm[2]+1;
			}else{
				$rm[1]=$rm[1]+1;
			}
		}

		for($i=31;$i<41;$i++){

			if($claves[$i]==$respuestas[$i]){
				$alg[0]=$alg[0]+1;
			}else if($respuestas[$i]==""){
				$alg[2]=$alg[2]+1;
			}else{
				$alg[1]=$alg[1]+1;
			}
		}

		for($i=41;$i<49;$i++){

			if($claves[$i]==$respuestas[$i]){
				$arit[0]=$arit[0]+1;
			}else if($respuestas[$i]==""){
				$arit[2]=$arit[2]+1;
			}else{
				$arit[1]=$arit[1]+1;
			}
		}

		for($i=49;$i<57;$i++){

			if($claves[$i]==$respuestas[$i]){
				$geo[0]=$geo[0]+1;
			}else if($respuestas[$i]==""){
				$geo[2]=$geo[2]+1;
			}else{
				$geo[1]=$geo[1]+1;
			}
		}

		for($i=57;$i<65;$i++){

			if($claves[$i]==$respuestas[$i]){
				$trigo[0]=$trigo[0]+1;
			}else if($respuestas[$i]==""){
				$trigo[2]=$trigo[2]+1;
			}else{
				$trigo[1]=$trigo[1]+1;
			}
		}

		for($i=65;$i<77;$i++){

			if($claves[$i]==$respuestas[$i]){
				$fis[0]=$fis[0]+1;
			}else if($respuestas[$i]==""){
				$fis[2]=$fis[2]+1;
			}else{
				$fis[1]=$fis[1]+1;
			}
		}

		for($i=77;$i<89;$i++){

			if($claves[$i]==$respuestas[$i]){
				$quim[0]=$quim[0]+1;
			}else if($respuestas[$i]==""){
				$quim[2]=$quim[2]+1;
			}else{
				$quim[1]=$quim[1]+1;
			}
		}

			for($i=89;$i<101;$i++){

			if($claves[$i]==$respuestas[$i]){
				$bio[0]=$bio[0]+1;
			}else if($respuestas[$i]==""){
				$bio[2]=$bio[2]+1;
			}else{
				$bio[1]=$bio[1]+1;
			}
		}

		include 'verDegradado.php';
		 verDegradado($rv,$rm,$alg,$arit,$geo,$trigo,$fis,$quim,$bio);
	
?>	


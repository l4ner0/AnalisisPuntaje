
function validarDatos(){
	var error = false;
	var mensaje="";
	
	var univ=document.getElementsByName("universidad")[0].value;

	if(univ == 0){
		error=true;
		mensaje="Debe elegir una universidad";
	}else{
		mensaje="";
	}
	document.getElementById("e1").innerHTML = mensaje;

	var nExamen=document.getElementsByName("n_examen")[0].value;
	
	if(nExamen.trim() == ""){
		error=true;
		mensaje="Debe escribir el año del examen";
	}else{
		mensaje="";
	}
	document.getElementById("e2").innerHTML = mensaje;

	if(!error){

		return true;

	}else{

		return false;
	}	

}
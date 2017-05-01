(function(){

	var formulario=document.getElementsByName('formularioLLenadoDatos')[0],
		elementos=formulario.elements,
		boton=document.getElementsById('grabar1');

	var validarUniversidad=function(e){
		if(formulario.universidad.value=="0"){
			alert("Elije una universidad");
			e.preventDefault();

		}
	};

	var validar = function(e){
		validarUniversidad(e);
	};

	formulario.addEventListener("submit",validar);

})
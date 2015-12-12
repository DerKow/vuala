// JavaScript Document

function validarContacto(){
	if(document.formularioContacto.nombre.value===""){
		alert("Debe Ingresar tu nombre completo.");
		document.formularioContacto.nombre.focus();
		return false();
	}
	
	if(document.formularioContacto.email.value===""){
		alert("Debe ingresar tu correo electrónico.");
		document.formularioContacto.email.focus();
		return false();
	}
	
	if(document.formularioContacto.mensaje.value===""){
		alert("Debe ingresar un asunto para enviar.");
		document.formularioContacto.mensaje.focus();
		return false();
	}
	
	document.formularioContacto.submit();
}

function validarEmail(idMail){
	object=document.getElementById(idMail);
	valueForm=object.value;
 
	var patron=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
	if(valueForm.search(patron)!=0){
		alert("Debe ingresar un correo electrónico correcto.");
		document.formularioContacto.email.focus();
		return;
	}
}

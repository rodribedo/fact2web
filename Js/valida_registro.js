with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && nit.value==""){
			ok=false;
			alert("Debe escribir un numero de identificacion valido");
			nit.focus();
		}		
		if(ok &&name.value==""){
			ok=false;
			alert("Debe escribir su nombre");
			name.focus();
		}
		if(ok &&apellido.value==""){
			ok=false;
			alert("Debe escribir su apellido");
			apellido.focus();
		}
		if(ok && username.value==""){
			ok=false;
			alert("Debe escribir un nombre de usuario");
			username.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Debe escribir su password");
			password.focus();
		}
		if(ok && confirm_password.value==""){
			ok=false;
			alert("Debe escribir su confirmacion de password");
			confirm_password.focus();
		}

		if(ok && password.value!= confirm_password.value){
			ok=false;
			alert("Los passwords no coinciden");
			confirm_password.focus();
		}
		if(ok && email.value==""){
			ok=false;
			alert("Debe escribir su email");
			email.focus();
		}
		if(ok &&direccion.value==""){
			ok=false;
			alert("Debe escribir su direccion de localidad");
			direccion.focus();
		}
		if(ok &&telefono.value==""){
			ok=false;
			alert("Debe escribir su telefono");
			telefono.focus();
		}
		if(ok &&regimen.value==""){
			ok=false;
			alert("Debe seleccionar el tipo de regimen al que pertenece");
			regimen.focus();
		}
		if(ok &&acepta.value==""){
			ok=false;
			alert("Debe aceptar para continuar");
			acepta.focus();
		}

		if(ok){ submit(); }
	}
}

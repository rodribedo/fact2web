<?php

if(!empty($_POST)){
	
	if(isset($_POST["nit"]) 
	
	 &&isset($_POST["name"])
	  &&isset($_POST["apellido"]) 
	  &&isset($_POST["username"])
	  &&isset($_POST["password"])
	  &&isset($_POST["confirm_password"])
	  &&isset($_POST["email"])
	   &&isset($_POST["telefono"]) 
	   &&isset($_POST["direccion"])
	   &&isset($_POST["regimen"]) 
	   &&isset($_POST["acepta"])){
	      	
		if($_POST["nit"]!=""
		&& $_POST["username"]!=""
		&&$_POST["password"]!=""
		&&$_POST["password"]==$_POST["confirm_password"]
		&&$_POST["email"]!=""
		){
			include "../Modelo/conexion.php";
			$clave=$_POST["password"];
			$passcifrado = md5($clave);
			$found=false;
			$sql1= "select * from usuario where USULogin=\"$_POST[username]\" or USUMail=\"$_POST[email]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../index.php?pag=Vista/registro';</script>";
			}
			$sql = "insert into usuario(USUIdentificacion,USUNombre,USUApellido,USULogin,USUPassword,USURegimen,USUDireccion,USUTelefono,USUMail,creado_en) value (\"$_POST[nit]\", \"$_POST[name]\", \"$_POST[apellido]\", \"$_POST[username]\",\"$passcifrado\", \"$_POST[regimen]\", \"$_POST[direccion]\", \"$_POST[telefono]\", \"$_POST[email]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../index.php?pag=Vista/iniciarSesion';</script>";
			}
		}
	}
}



?>

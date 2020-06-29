<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
//Guardamos en una variable la sentencia sql que permite actualizar el Cliente

echo $sql="update cliente set CLINit='$_REQUEST[identificacion]', CLINombre = '$_REQUEST[nombres]', 

CLIApellido = '$_REQUEST[apellidos]', CLIidUsuario = '$_REQUEST[usuario]', CLIDireccion = '$_REQUEST[direccion]', CLITelefono = '$_REQUEST[telefono]', CLIMail = '$_REQUEST[correo]'  where idCliente = '$_REQUEST[idCliente]' ";

//Ejecutamos la consulta llamando al método query del objeto conexión y pasando la sentencia sql
$resultado=$objConexion->query($sql);

if ($resultado)	
	header("location:../Vista/index2.php?pag=actualizarDatosCliente&msj=1");
else
	header("location:../Vista/index2.php?pag=actualizarDatosCliente&msj=2");
$objConexion->close();
?>






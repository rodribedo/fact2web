<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Cliente.php";
//Creamos el objeto Medico
$objCliente= new Cliente();
$objCliente->CrearCliente($_REQUEST['identificacion'],$_REQUEST['nombres'],$_REQUEST['apellidos'],
$_REQUEST['usuario'],$_REQUEST['direccion'],$_REQUEST['telefono'],$_REQUEST['correo']);

$resultado = $objCliente->agregarCliente();
if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarCliente&msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarCliente&msj=2");

?>




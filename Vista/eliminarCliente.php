<?php
require "../Modelo/conexionBasesDatos.php";
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST


$objConexion = Conectarse();

$sql="DELETE FROM cliente WHERE idCliente='$_REQUEST[idCliente]'";

$resultado = $objConexion->query($sql);

if ($resultado)	
	header("location:../Vista/index2.php?pag=actualizarDatosCliente&msj=1");
else
	header("location:../Vista/index2.php?pag=actualizarDatosCliente&msj=2");
$objConexion->close();

?>



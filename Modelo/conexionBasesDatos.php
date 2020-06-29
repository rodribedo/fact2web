<?php
function Conectarse()
{
	$objConexion = new mysqli("localhost","root","1qazxsw2","facturaweb");
	if ($objConexion->connect_errno)
	{
		echo "Error de conexion a la Base de Datos ".$objConexion->connect_error;
		exit();
	}
	else
	{
		return $objConexion;
	}
}
?>





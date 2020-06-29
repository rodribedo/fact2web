<?php
session_start();
extract($_REQUEST);
$total= $_REQUEST[total];
$numfact= $REQUEST[num];

require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
//Guardamos en una variable la sentencia sql que permite actualizar la factura

echo $sql="update factura set FacTotal='$_REQUEST[total]' where FACNumero ='$_REQUEST[num]' ";

//Ejecutamos la consulta llamando al método query del objeto conexión y pasando la sentencia sql
$resultado=$objConexion->query($sql);

if ($resultado)	

	header("location:../Vista/index2.php?pag=resultadoModificaFactura&msj=1");
else
	header("location:../Vista/index2.php?pag=listarFacturasTabla&msj=2");
	

?>






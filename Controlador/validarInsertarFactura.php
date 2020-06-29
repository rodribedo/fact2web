<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Factura.php";
//Creamos el objeto Factura
$objFactura= new Factura();
$objFactura->CrearFactura($_REQUEST['numero'],$_REQUEST['idcliente'],$_REQUEST['idusuario']);

$resultado = $objFactura->agregarFactura();


?>




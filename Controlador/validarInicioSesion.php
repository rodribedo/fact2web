<?php
session_start();
extract ($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
/* los variables que viene del formulario son: $login, $password */

/*asigno a la variable password el valor encriptado de lo que colocaron
en el password del formulario, ya que así esta en la base de datos */

$pass = md5($_REQUEST['pass']);
$login = $_REQUEST['login'];

$objConexion=Conectarse();
// Vamos a realizar el proceso para consultar los pacientes
//Guardamos en una variable la sentencia sql
$sql="select * from usuario where USULogin = '$login' and USUPassword = '$pass'";
//Asignar a una variable el resultado de la consulta
$resultado=$objConexion->query($sql);
//verifico si existe el usuario
$existe = $resultado->num_rows;

if ($existe==1)  //quiere decir que los datos estan bien
{
	$usuario=$resultado->fetch_object();
	$_SESSION['user']= $usuario->USULogin;
	$_SESSION['user_id']= $usuario->idUsuario;
	$_SESSION['nituser']= $usuario->USUIdentificacion;
	header("location:../Vista/index2.php?pag=contenido");
	
}
else
{
	header("location:../Vista/index2.php?pag=iniciarSesion&x=1");  //x=1, quiere decir que el usuario no esta registrado
}

?>

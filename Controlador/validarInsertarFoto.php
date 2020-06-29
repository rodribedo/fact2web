<?php
include("../Modelo/conexion2foto.php");


$nombre = $_POST['nombre'];
$fotoIdusu = $_POST['idusuario'];
$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));




$query = "INSERT INTO foto(fotoNombre,fotoIdUsuario,fotoImagen) VALUES('$nombre','$fotoIdusu','$Imagen')";

$resultado = $conexion->query($query);


if ($resultado)
        header("location:../Vista/index2.php?pag=fotoPerfil&msj=1");
else
        header("location:../Vista/index2.php?pag=fotoPerfil&msj=2");
	
	$conexion->close();

?>





					

<?php
	extract($_REQUEST);	
	
require "../Modelo/conexionBasesDatos.php";
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST


$objConexion = Conectarse();

$sql="DELETE FROM foto WHERE idFoto='$_REQUEST[idFoto]'";


$resultado = $objConexion->query($sql);

if ($resultado)	{
	
echo "Foto removida satisfactoriamente";


	}
else {
	
	header_remove(); 
	header("location: ../Vista/index2.php?pag=fotoPerfil&msj=5");
   
		}
	
?>
<div class="btn">
<a href="index2.php?pag=fotoPerfil">Volver a las Fotos</a>

</div>

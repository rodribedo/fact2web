<a><div> ID: <?php echo $_SESSION['user_id'];?></div></a>
<?php
$usu= $_SESSION['user_id']; 
?>


<?php
	extract($_REQUEST);	
	require "../Modelo/conexionBasesDatos.php";
   extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
   $objConexion = Conectarse();

 $sql2="update foto set roll=1  where fotoIdUsuario='$usu' and roll=2 ";
 $resultado1 = $objConexion->query($sql2);
 
	if ($resultado1)	{
	
     	}
			else {
						echo "no se pudo retirar del perfil la foto actual";
   					} 
 
 
 
 $sql="update foto set roll=2  where fotoIdUsuario='$usu' and idFoto='$_REQUEST[idFoto]' ";

  $resultado = $objConexion->query($sql);

      if ($resultado)	{
	
          echo "Foto asignada satisfactoriamente";
     	}
			else {
						echo "no no no no";
   					}
	
?>
<div class="btn">
<a href="../Vista/index2.php?pag=fotoPerfil">Volver a las Fotos</a>

</div>
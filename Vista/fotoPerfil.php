<div class="row">

<div class="col">

<div class="display 4 aling-center">
<H2>Agregar una foto al perfil de Imagenes</H2>
<br>
</div>

	<div class="align-center">
	

	<br>

		<form action="../Controlador/validarIsertarFoto.php" method="POST" enctype="multipart/form-data" >
			<input type="text" name="nombre" placeholder="Escriba un Nombre para la Foto" value="" required />
			<input type="hidden" name="idusuario" value="<?php echo $_SESSION['user_id'];?>"/>
			<input type="file"  name="Imagen" required/>
			<input type="submit" value="Aceptar">
			
		</form>
		

		
	</div>

<br>
<br>
<br>

<br>
<br>
<br>
    <?php
	if ($msj==1)
        	echo '<p align="center" >Se ha Agregado la foto Correctamente';
	if ($msj==2)
        	echo '<p align="center"> Problemas al Agregar la foto, favor Revisar';

	?>
	
</div>


</div>

<div class="row">
<div class="col">

<div class="display 4 aling-center">
<H2>Mis Imagenes</H2>
</div>




<a><div> Fotos de ID: <?php echo $_SESSION['user_id'];?></div> La Columna "Roll" Indica:  "1" Foto disponible ; "2" foto del perfil y "3" logo de la factura </a>
<?php
$usu= $_SESSION['user_id']; 
?>

<div class="align-center">

<table border="1">
	<thead>		
		<tr>
			<th>idfoto</th>
			<th>Nombre</th>
			<th>Usuario</th>
			<th>Imagen</th>
			<th>Eliminar</th>
			<th>Foto de perfil</th>
			<th>Logo de factura</th>
			<th>Roll</th>
		</tr>
	</thead>
	<tbody>	
	

	
	<?php
	include("../Modelo/conexion2foto.php");
	
	
	
	
	$query = "SELECT * FROM foto where fotoIdUsuario='$usu'";
	
	$resultado = $conexion->query($query);

	while($row=$resultado->fetch_assoc()) {
	?>
	
	
	
	<tr>
		<td><?php echo $row['idFoto'];?>	</td>	
		<td><?php echo $row['fotoNombre'];?></td>
		<td><?php echo $row['fotoIdUsuario'];?></td>
		<td><img height="40px" src="data:image/png;base64,<?php echo base64_encode($row['fotoImagen']);?>"/></td>
				
		<td>
			   <a href="index2.php?pag=eliminarFoto&idFoto=<?php echo $row['idFoto'];?>"><img src="../Recursos/eliminar.png" width="29" height="24" /></a>
		</td>
		
		<td><a href="index2.php?pag=../Controlador/validarCambiarFotoPerfil&idFoto=<?php echo $row['idFoto'];?>">Asignar a perfil</a></td>	
		<td><a href="index2.php?pag=../Controlador/validarCambiarLogoFactura&idFoto=<?php echo $row['idFoto'];?>">Asignar a logo</a></td>	
		<td><?php echo $row['roll'];?></td>
	</tr>
	
	<?php
		}
	?>	
	
	
	</tbody>
</table>

<br>
<br>
<br>

<br>
<br>

	<?php
			if ($msj==5)
					echo "<br><p align='center'> Se borro foto Correctamente";
			if ($msj==6)
					echo "<br><p align='center'> Problemas para borrar foto";
		?>






</div>

</div>


</div>

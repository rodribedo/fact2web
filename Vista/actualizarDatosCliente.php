<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
#$sql="select * from cliente";
/*hacemos la sentencia sql que me permita traer datos de las tabla */
$sql="select idCliente,CLINit,CLINombre,CLIApellido,CLIidUsuario,CLIDireccion,CLITelefono,CLIMail from cliente where CLIidUSUARIO={$_SESSION['user_id']}";	  
$clientes= $objConexion->query($sql);
?>
<h1 align="center">LISTADO DE CLIENTES PARA EDITAR</h1>
<table width="90%" border="1" align="center">
  <tr align="center" bgcolor="#4B84BB" class="texto">
    <td>Identificacion</td>
    <td>Nombres</td>
    <td>Apellidos</td>
    <td>Usuario</td>
    <td>Direccion</td>
    <td>Telefono</td>
    <td>Correo</td>
    <td>Editar</td>
    <td>Eliminar</td>
  </tr>
  
	 <?php
		while($cliente=$clientes->fetch_object())
				{
	 ?>
	 
  <tr>
    <td><?php echo $cliente->CLINit?></td>
    <td><?php echo $cliente->CLINombre?></td>
    <td><?php echo $cliente->CLIApellido?></td>
    <td><?php echo $cliente->CLIidUsuario?></td>
    <td><?php echo $cliente->CLIDireccion?></td>
    <td><?php echo $cliente->CLITelefono?></td>
    <td><?php echo $cliente->CLIMail?></td>
   	 <td align="center">
    		<a href="index2.php?pag=editarCliente&idCliente=<?php echo $cliente->idCliente?>" title="Clic para Editar Cliente">
    		<img src="../Recursos/editar.jpg" width="30" height="30" /></a>
  	 </td>
	 <td align="center">
                <a href="index2.php?pag=eliminarCliente&idCliente=<?php echo $cliente->idCliente?>"><img src="../Recursos/eliminar.png" width="29" height="24" /></a>
        </td>


  </tr>  
 		<?php
			}  //cerrando el ciclo while
		?>
</table>

	





		<?php
			if ($msj==1)
					echo "<br><p align='center'> El cliente se Actualizó Correctamente";
			if ($msj==2)
					echo "<br><p align='center'> Problemas para Actualizar el Cliente";
		?>


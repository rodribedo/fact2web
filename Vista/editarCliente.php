<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql="select c.idCliente, c.CLINit, c.CLINombre, c.CLIApellido, c.CLIidUsuario, c.CLIDireccion, c.CLITelefono, c.CLIMail from cliente c where (c.idCliente='$_REQUEST[idCliente]')";
$clientes = $objConexion->query($sql);
$cliente=$clientes->fetch_object();
?>

 <form id="form3" name="form3" method="post" action="../Controlador/validarEditarCliente.php">
      <table width="42%" border="0" align="center">
        <tr bgcolor="#4B84BB" class="texto">
            <td colspan="2" align="center">EDITAR CLIENTE</td>
        </tr>
        <tr>
          <td width="28%" align="right" bgcolor="#fbec88">Identificación</td>
          <td width="72%"><label for="identificacion"></label>
          <input name="identificacion" type="text" id="identificacion" value="<?php echo $cliente->CLINit ?>"  size="40"  required /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#fbec88">Nombres</td>
          <td><input name="nombres" type="text" id="nombres" value="<?php echo $cliente->CLINombre ?>"  size="40" required /></td>
        </tr>
        <tr>
          <td height="25" align="right" bgcolor="#fbec88">Apellidos</td>
          <td><input name="apellidos" type="text" id="apellidos" value="<?php echo $cliente->CLIApellido ?>"  size="40" required/></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#fbec88">Usuario</td>
          <td><input name="usuario" type="text" readonly="readonly"  id="usuario" value="<?php echo $cliente->CLIidUsuario ?>" size="40" required/></td>
        </tr>
	<tr>
          <td align="right" bgcolor="#fbec88">Direccion</td>
          <td><input name="direccion" type="text" id="direccion" value="<?php echo $cliente->CLIDireccion ?>" size="40" required/></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#fbec88">Telefono</td>
          <td><input name="telefono" type="text" id="telefono" value="<?php echo $cliente->CLITelefono ?>" size="40" required/></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#fbec88">Correo</td>
          <td><input name="correo" type="text" id="correo" value="<?php echo $cliente->CLIMail ?>" size="40" required/></td>
        </tr>
        <tr bgcolor="#cc0000" class="texto">
          <td colspan="2" align="center" bgcolor="#4B84BB"><input type="submit" name="button3" id="button3" value="Enviar" /></td>
        </tr>
      </table>
 <input name="idCliente" type="hidden" value="<?php echo $_REQUEST['idCliente']?>" />

    </form>
    
    <?php
if ($msj==1)
	echo '<p align="center" >Se ha Actualizado el Cliente Correctamente';
if ($msj==2)
	echo '<p align="center"> Problemas al Actualizado el Cliente, favor Revisar';

?>

 <form id="form1" name="form1" method="post" action="../Controlador/validarInsertarCliente.php">
      <table width="42%" border="0" align="center">
        <tr bgcolor="#4B84BB" class="texto">
          <td colspan="2" align="center">INSERTAR CLIENTE</td>
        </tr>
        <tr>
          <td width="28%" align="right" bgcolor="#fbec88">Identificación</td>
          <td width="72%"><label for="identificacion"></label>
          <input name="identificacion" type="text" id="identificacion" size="40"  required /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#fbec88">Nombres</td>
          <td><input name="nombres" type="text" id="nombres" size="40" required /></td>
        </tr>
        <tr>
          <td height="25" align="right" bgcolor="#fbec88">Apellidos</td>
          <td><input name="apellidos" type="text" id="apellidos" size="40" required/></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#fbec88">Usuario</td>
          <td><input name="usuario" type="text" readonly="readonly" id="usuario" size="40" value="<?php echo $_SESSION['user_id']; ?>" required/></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#fbec88">Direccion</td>
          <td><input name="direccion" type="text" id="direccion" size="40" required/></td>
        </tr>
        <tr>
        <tr>
          <td align="right" bgcolor="#fbec88">Telefono</td>
          <td><input name="telefono" type="text" id="telefono" size="40" required/></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#fbec88">Correo</td>
          <td><input name="correo" type="email" id="correo" size="40" required/></td>
        </tr>
             <tr bgcolor="#4B84BB" class="texto">
          <td colspan="2" align="center" bgcolor="#4B84BB"><input type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
      </table>
    </form>
    
    <?php
if ($msj==1)
	echo '<p align="center" >Se ha Agregado el cliente Correctamente';
if ($msj==2)
	echo '<p align="center"> Problemas al Agregar el cliente, favor Revisar';

?>

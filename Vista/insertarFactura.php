<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();

//Consulta Datos usuario para poder Mostrar usuario en la Lista
$sql="Select idUsuario, USUNombres, USUApellido, USURegimen, USUDireccion, USUTelefono, USUMail from usuario";
$usuarios=$objConexion->query($sql);

//Consulta Datos Clientes para poder Mostrar clientes en la Lista
$sql= "select * from cliente WHERE CLIidUsuario = '$_SESSION[user_id]' ";
$clientes=$objConexion->query($sql);

//Consulta para predecir el numero de autoincrmento de idfactura que le corresponderia al numero de factur por defecto

$sql="SELECT `AUTO_INCREMENT`
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'facturaweb'
AND   TABLE_NAME   = 'factura';";
$numfactura=$objConexion->query($sql);

while($row=$numfactura->fetch_assoc()) {
	$fact = $row['AUTO_INCREMENT'];
	
		}
	?>
		
	
 
 <form id="form1" name="form1" method="post" action="modeloFactura1.php">
      <table width="42%" border="0" align="center">
        <tr bgcolor="#4B84BB" class="texto">
          <td colspan="2" align="center">INSERTAR FACTURA</td>
        </tr>
        <tr>
          <td width="28%" align="right" bgcolor="#fbec88">Numero de Factura :</td>
          <td width="72%"><label for="numero"></label>
          <input name="numero" type="text" id="numero" size="40" value="<?php echo $fact ;?>" required /></td>
        </tr>
        
      
        
  <tr>
      <td width="33%" align="right" bgcolor="#fbec88">ID Cliente:</td>
      <td width="67%">
      <select name="idcliente" id="idcliente" style="width:300px" >
      <option value="0" >Seleccione</option>
        <?php
		//Agrego a la lista cliente los clientes existentes para poder seleccionar		
		while ($cliente=$clientes->fetch_object())
		{
			?>
             <option value="<?php echo $cliente->idCliente;?> ">
			 					<?php echo $cliente->CLINit. "-".$cliente->CLINombre." ".$cliente->CLIApellido;?>
             </option>
		<?php	
		}//cerrando el ciclo while		
		?>
      </select>
      </td>
    </tr>
        
                
        <tr>
          <td align="right" bgcolor="#fbec88">ID Usuario</td>
           <td><input name="idusuario" type="text" readonly="readonly" id="idusuario" size="40" value="<?php echo $_SESSION['user_id']; ?>" required/></td>
          
        </tr>
       
            
        
       
        <tr bgcolor="#4B84BB" class="texto">
          <td colspan="2" align="center" bgcolor="#4B84BB"><input type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
      </table>
    </form>
    
    <?php
if ($msj==1)



?>

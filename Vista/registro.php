<br>
<br>

<form id="form1" name="registro" method="post" action="Controlador/validarRegistro.php">
  <table width="56%" border="0" align="center">
    <tr bgcolor="#CCCC00">
      <td colspan="2" align="center" bgcolor="#4B84BB" class="texto" >Registrarse </td>
    </tr>
    <tr>
      <td width="89%" align="right">Nº Identificacion</td>
      <td width="61%"><label for="nit"></label>
      <input name="nit" type="text" id="nit" size="40" placeholder="Cedula, Nit etc." required/></td>
    </tr>
    
    <tr>
      <td align="right">Nombres</td>
      <td><label for="name"></label>
      <input name="name" type="text" id="name" size="40" placeholder="Escriba su nombre." required/></td>
    </tr>
    
     <tr>
      <td align="right">Apellidos</td>
      <td><label for="apellido"></label>
      <input name="apellido" type="text" id="apellido" size="40" placeholder="Escriba su apellido." required/></td>
    </tr>
    
     <tr>
      <td align="right">Alias de usuario</td>
      <td><label for="username"></label>
      <input name="username" type="text" id="username" size="40" placeholder="Alias de usuario." required/></td>
    </tr>
   
   <div class="form-group"> 
    <tr>
      <td align="right">Contraseña</td>
      <td><label for="password"></label>
      <input name="password" type="password" class="form-control" id="password" size="40" placeholder="Escriba su contraseña." required/></td>
    </tr>
   </div>
   
   <div class="form-group">
     <tr>
      <td align="right">Confirmar Contraseña</td>
      <td><label for="confirm_password"></label>
      <input name="confirm_password" type="password" class="form-control" id="confirm_password" size="40" placeholder="Repita su contraseña." required/></td>
    </tr>
    </div>
    <tr>
      <td align="right">Correo:</td>
      <td><label for="email"></label>
      <input name="email" type="email" id="email" size="40" placeholder="Email" required/></td>
    </tr>
    
     <tr>
      <td align="right">Telefono</td>
      <td><label for="telefono"></label>
      <input name="telefono" type="text" id="telefono" size="40" placeholder="Nº Telefono." required/></td>
    </tr>
    
    <tr>
      <td align="right">Direccion local</td>
      <td><label for="direccion"></label>
      <input name="direccion" type="text" id="direccion" size="40" placeholder="Direccion de localidad." required/></td>
    </tr>
    
    <tr>
      <td align="right">Regimen</td>
      <td><label for="regimen"></label>
      
      <select name="regimen" size="1">
					<option value="1">Regimen comun</option>
					<option value="2">Regimen simplificado</option>
					<option value="3">Gran contribuyente</option>
				</select>		  

      
      </td>
    </tr>
    
	    
    <tr>
      <td align="right">Politica</td>
      <td><label for="regimen"></label>
				<textarea class="txt_gen_gris" name="textarea"  rows="4" cols="84"  readonly="readonly">Write something here Write something here Write something here Write something hereWrite something here Write something here Write something here Write something hereWrite something here Write something here Write something here Write something hereWrite something here Write something here Write something here Write something hereWrite something here Write something here Write something here Write something hereWrite something here Write something here Write something here Write something hereWrite something here Write something here Write something here Write something hereWrite something here Write something here Write something here Write something hereWrite something here Write something here Write something here Write something hereWrite something here Write something here Write something here Write something hereWrite something here Write something here Write something here Write something hereWrite something here Write something here Write something here Write something hereWrite something here Write something here Write something here Write something hereWrite something here Write something here Write something here Write something hereWrite something here Write something here Write something here Write something hereWrite something here Write something here Write something here Write something hereWrite something here Write something here Write something here Write something here</textarea>    
		</td>   
    </tr>
    
        
	<tr>
      <td align="right">Acepto los terminos y condiciones</td>
      <td><label for="regimen"></label>
      <input type="checkbox" name="acepta" required/></td>
    </tr>       
    
       
     
    <tr>
      <td colspan="2" align="center" bgcolor="#4B84BB"><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
  </table>
</form>

<?php

if ($x==1)
	echo "<br><p align='center'> Usuario no registrado con los datos ingresados, vuelva a intentar";
if ($x==2)
	echo "<br><p align='center'> Deben Iniciar Sesión para poder ingresar a la Aplicación";
if ($x==3)
	echo "<br><p align='center'> El Usuario ha cerrado la Sesión";
?>

<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Cliente.php";
$objCliente=new Cliente();
$clientes=$objCliente->consultarClientes();
?>
<h1 align="center">LISTADO DE CLIENTES POR CADA USUARIO</h1>
<table width="85%" border="1" align="center">
  <tr align="center" bgcolor="#4B84BB" class="texto">
    <td>Identificacion</td>
    <td>Nombres/Razon Social</td>
    <td>Apellidos</td>
    <td>Usuario</td>
    <td>Direccion</td>
    <td>Telefono</td>
    <td>Correo</td>
  </tr>
 <?php
while($registro=$clientes->fetch_object())
{
?>
  <tr>
    <td><?php echo $registro->CLINit?></td>
    <td><?php echo $registro->CLINombre?></td>
    <td><?php echo $registro->CLIApellido?></td>
    <td><?php echo $registro->CLIidUsuario?></td>
    <td><?php echo $registro->CLIDireccion?></td>
    <td><?php echo $registro->CLITelefono?></td>
    <td><?php echo $registro->CLIMail?></td>
  </tr>  
 <?php
}  //cerrando el ciclo while
?>
</table>

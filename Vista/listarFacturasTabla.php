<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Factura.php";
$objFactura=new Factura();
$facturas=$objFactura->consultarFacturas();
?>
<h1 align="center">LISTADO DE FACTURAS POR CADA USUARIO</h1>
<table width="85%" border="1" align="center">
  <tr align="center" bgcolor="#4B84BB" class="texto">
    <td>Nº Factura</td>
    <td>Fecha</td>
    <td>Total</td>
    <td>Usuario</td>
    <td>Cliente</td>
        	<td>Agregar Items</thead>
   </tr>
 <?php
while($registro=$facturas->fetch_object())
{
?>
  <tr>
    <td><?php echo $registro->FACNumero?></td>
    <td><?php echo $registro->FACFecha?></td>
    <td><?php echo $registro->FacTotal?></td>
    <td><?php echo $registro->FACidUsuario?></td>
    <td><?php echo $registro->FACidCliente?></td>
   <div class="bg-info text-light">
			<td><a  href="modeloFactura1.php">
  			 <img src="../images/receipt.svg" width="30" height="30" class="d-inline-block align-top" >Agregar Items
  			 </a>
  		</td>    
  </div>
  </tr>  
 <?php
}  //cerrando el ciclo while
?>
</table>

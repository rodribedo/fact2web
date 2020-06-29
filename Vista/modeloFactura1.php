
<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
?>
<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Factura.php";
//Creamos el objeto Factura
$objFactura= new Factura();
$objFactura->CrearFactura($_REQUEST['numero'],$_REQUEST['idcliente'],$_REQUEST['idusuario']);
$resultado = $objFactura->agregarFactura();
?>
<?php
extract($_REQUEST);
$objConexion=Conectarse();
$numero = $_POST['numero'];
$idcliente = $_POST['idcliente'];
$idusuario = $_POST['idusuario'];
$sql = "SELECT * FROM usuario, cliente, factura WHERE usuario.idUsuario= $idusuario and cliente.idCliente=$idcliente and FACNumero=$numero ";
$resultado = $objConexion->query($sql);
while($row=$resultado->fetch_object()) {
?>

<!doctype html>
<html>
		<link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Css/estilos2.css" rel="stylesheet">
    
 <form id="form3" name="form3" method="post" action="../Controlador/validarEditarFactura.php">
		<div class="container-fluid " >
		<div class="d-flex justify-content-end flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
           
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <button class="btn btn-sm btn-outline-secondary dropdown-toggle">Compartir</button>
          <button class="btn btn-sm btn-outline-secondary dropdown-toggle">Exportar</button>
          <button class="btn btn-sm btn-outline-secondary">
             <span data-feather="printer"></span>
               Imprimir
          </button>
			 </div>
              
  	  	<div class="mr-auto align-items-right align-content-end">
			  	<input type="submit" class="btn btn-sm btn-primary font-weight-bold" name="button3" id="button3" value="Grabar Cambios" />
		  	</div>             
       </div>
		 </div>	
    </div>

	<head>
		<meta charset="utf-8">
		<title>Modelo-Factura-1</title>
		<link rel="stylesheet" href="../Css/estiloFactura.css">
		<script src="../Js/jsFactura.js"></script>
	</head>
	
	<body>
		
		<header>


			<h1>FACTURA</h1>
			<address contenteditable>
				<p><?php echo $row->USUNombre ?><?php echo $row->USUApellido ?></p>
				<p>NIT: <?php echo $row->USUIdentificacion ?><br><?php echo $row->USUDireccion ?></p>
				<p><?php echo $row->USUTelefono ?></p>
			</address>
			
			<span>
			
				<?php
					include("../Modelo/conexion2foto.php");
					$usu= $_SESSION['user_id']; 
					$query = "SELECT * FROM foto where fotoIdUsuario='$usu' and roll=3";
					$resultado = $conexion->query($query);
						while($row1=$resultado->fetch_assoc()) {
					?>		
							<img width="128" height="60px" src="data:image/png;base64,<?php echo base64_encode($row1['fotoImagen']);?>">
						<?php
								}
						?>	
						
			  <input type="file" accept="image/*">
			</span>
		</header>
		<article>
			<h1>Recipient</h1>
			
			<address contenteditable>
					<p><?php echo $row->CLINombre?> <?php echo $row->CLIApellido ?> </p>
						<p class=""><small><?php echo $row->CLIDireccion?> </small></p>
						<p><small><?php echo $row->CLITelefono ?></small></p>
			</address>
			
			
			
			
			
			
			<table class="meta">
				<tr>
					<th><span contenteditable>Factura Nº</span></th>
					<td><span contenteditable><input name="num" type="text" id="num" value="<?php echo $numero ?>" /></span>	</td>
					
					
				</tr>
				<tr>
					<th><span contenteditable>Fecha</span></th>
					<td><span contenteditable><?php echo $row->FACFecha ?></span></td>
				</tr>
				<tr>
				
				
				
					<th><span contenteditable>TOTAL General</span></th>
						<td class="border border-primary">
						
								<input class="bg-light"  name="total" type="text" id="total"/>
								
						</td>
					
					
					
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span contenteditable>Item</span></th>
						<th><span contenteditable>Descripcion</span></th>
						<th><span contenteditable>Precio</span></th>
						<th><span contenteditable>Cantidad</span></th>
						<th><span contenteditable>Sub-total</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a class="cut">-</a><span contenteditable></span></td>
						<td><span contenteditable></span></td>
						<td><span data-prefix>$</span><span contenteditable></span></td>
						<td><span contenteditable>1</span></td>
						<td><span data-prefix>$</span><span></span></td>
					</tr>
				</tbody>
			</table>
			<a class="add">+</a>
			<table class="balance">
				<tr>
					<th><span contenteditable>Sub-Total</span></th>
					<td><span data-prefix>$</span><span></span></td>
				</tr>
				<tr>
					<th><span contenteditable>Valor Impuestos</span></th>
					<td><span data-prefix>$</span><span contenteditable></span></td>
				</tr>
				<tr>
					<th><span contenteditable>Valor total</span></th>
					<td><span data-prefix>$</span><span></span></td>
				</tr>
			</table>
		</article>
		<aside>
			<h1><span contenteditable>Notas adicionales</span></h1>
			<div contenteditable>
				<p>Forma de pago: A 30 dias.</p>
				<p>Garantia: 1 año.</p>
			</div>
			
<?php
		}
	?>				
			
		</aside>
			<br><br><br><br><br><br>
			
			
			
			
				<input type="submit" class="btn btn-sm btn-primary font-weight-bold" name="button3" id="button3" value="Grabar Cambios" />
				

		
	                           
	</body>
	
</form>	
</html>

	

<?php
extract($_REQUEST);

?>





	<?php
			if ($msj==1)
					//echo "<br><p class="text-success"align='center'> La factura se Actualizó Correctamente";
        				echo '<p align="center" class="text-success" >Se actualizo la factura Correctamente';



			if ($msj==2)
			//		echo "<br><p class="text-danger" align='center'> Problemas para Actualizar la Factura";
					echo '<p align="center" class="text-danger"> Problemas al actualizar la factura, favor Revisar';
		?>
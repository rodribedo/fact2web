<?php
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
	$x=0;
if (!isset($_REQUEST['pag']))
        $pag='Vista/iniciarSesion';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Plantilla Principal</title>
<script src="Js/menu.js"> </script>
<link href="Css/estilos.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="Css/estiloMenu.css" >
<link rel="stylesheet" type="text/css" href="Css/bootstrap.min.css"> 
</head>
<body>
 
<div class="container">
	
	
      <div id="divbanner"><?php include "banner.php"?></div>
     
      <div id="divencabezado"><?php include "navbar.php"?></div>
	
	 
 
	<div id="divContenedor">
<!--    <div id="divEncabezado de la aplicacion Fac2web 2 segunda edicion 3">
	<___php include "Vista/encabezado.php"?>

    <a  align="right" class="btn btn-success btnterapia" href="index.php?pag=Vista/registro">Registrese aqui</a>
</div>  -->
    <div id="divContenido"> <?php include $pag.".php" ?> </div>

    <div id="divPiePagina"><?php include "Vista/piePagina.php"?> </div>
    
    
	</div>

</div>




<script src="Js/valida_registro.js"></script>
 <script src="Js/jquery-3.3.1.js"></script>
    <script src="Js/popper.min.js"></script>
    <script src="Js/bootstrap.min.js"></script>
    
    

</body>
</html>

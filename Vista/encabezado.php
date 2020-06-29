
	
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Compartir</button>
                <button class="btn btn-sm btn-outline-secondary">Exportar</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="printer"></span>
                Imprimir
              </button>
            </div>
</div>
           

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
   
	<a class="navbar-brand" href="../Vista/index2.php">
   <img src="../images/logo-2.svg" width="45" height="30" class="d-inline-block align-top" alt="Logo FacturaWeb">FacturaWeb O.R.G.
  </a>   

     
  <a class="col-sm-2 col-md-2 mr-0" href="#"><div>Nit: <?php echo $_SESSION['nituser'];?></div></a>


<div class="user_admin dropdown ml-auto"> 
		<a href="javascript:void(0);" data-toggle="dropdown">
		
		
		
		
<?php
	include("../Modelo/conexion2foto.php");
	$usu= $_SESSION['user_id']; 
			
	$query = "SELECT * FROM foto where fotoIdUsuario='$usu' and roll=2";
	
	$resultado = $conexion->query($query);

	while($row=$resultado->fetch_assoc()) {
	?>		
		
		
		
		
		
		
		
			<img height="40px" src="data:image/png;base64,<?php echo base64_encode($row['fotoImagen']);?>">
			
			
			<?php
		}
	?>	
			
			
			
			<span class="user_adminname">
				<?php echo $_SESSION['user'];?> ID: <?php echo $_SESSION['user_id'];?>
			</span>
				 <b class="caret"></b>
		 </a>
          <ul class="dropdown-menu ml-auto">
            <div class="top_pointer"></div>
            <li> <a href="index2.php?pag=fotoPerfil"><i class="fa fa-user"></i> Cambiar foto de perfil</a> </li>
            <li> <a href="help.html"><i class="fa fa-question-circle"></i> Help</a> </li>
            <li> <a href="index2.php?pag=fotoPerfil"><i class="fa fa-cog"></i> Setting </a></li>
            <li> <a href="login.html"><i class="fa fa-power-off"></i> Logout</a> </li>
          </ul>
</div>




      <ul class="navbar-nav px-3">








        <li class="nav-item text-nowrap">

          <a class="nav-link" href="salir.php">Salir</a>
        </li>
      </ul>
 </nav>



<?php
	include("../Modelo/conexion2foto.php");

?>
	

<link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">

<div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel bg-primary rounded">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3 mr-auto">
                                <img src="../images/clientes2.svg" class="fa  mr-auto" alt="Imágenes responsive">

                                </div>
                                <div class="col-xs-9 mr-auto text-right">
                                
            													<?php
																				$query = "SELECT COUNT(*) FROM cliente where CLIIdUsuario='$usu'";
																				$resultado = $conexion->query($query);
																				$row=$resultado->fetch_assoc();
																				$resultado= $row['COUNT(*)']; 
																				?>
	                            
	                                  <div class="huge text-white"><?php  echo $resultado;?> </div>
                                                                                                          
                                    <div class="text-white">Clientes</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Ver mas..</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel bg-success rounded">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3 mr-auto">
                                <img src="../images/receipt.svg" class="fa  mr-auto" alt="Imágenes responsive">

                                </div>
                                <div class="col-xs-9 mr-auto text-right">
                                
                                	<?php
																				$query = "SELECT COUNT(*) FROM factura where FACidUsuario='$usu'";
																				$resultado = $conexion->query($query);
																				$row=$resultado->fetch_assoc();
																				$resultado= $row['COUNT(*)']; 
																		?>
	                           
  	                                  <div class="huge text-white"><?php  echo $resultado;?> </div>
                                <div class="text-white">Facturas</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Ver mas..</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
               <div class="col-lg-3 col-md-6">
                    <div class="panel bg-warning rounded">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3 mr-auto">
                                <img src="../images/cube.svg" class="fa  mr-auto" alt="Imágenes responsive">
                                </div>
                                <div class="col-xs-9 mr-auto text-right">
                                
                                
                                   
                                	                           
  	                                  <div class="huge text-white">?? </div>
                                    
                                    
                                    
                                    <div class="text-white">Productos</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Ver mas..</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
               <div class="col-lg-3 col-md-6">
                    <div class="panel bg-danger rounded">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3 mr-auto">
                                <img src="../images/coin.svg" class="fa  mr-auto" alt="Imágenes responsive">

                                </div>
                                <div class="col-xs-9 mr-auto text-right">
                                
                                	<?php
																				$query = "SELECT SUM(FACTotal) FROM factura where FACidUsuario='$usu'";
																				$resultado = $conexion->query($query);
																				$row=$resultado->fetch_assoc();
																				$resultado= $row['SUM(FACTotal)']; 
																		?>
	                           
  	                                  <div class="huge text-white"><?php  echo $resultado;?> </div>
                                <div class="text-white">Valor Facturas</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Ver mas..</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>









<div id="divEncabezado"><?php include "sectionChart.php"?></div>

          <h2>Ultimas Transacciones y Registros</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>eget</td>
                  <td>nulla</td>
                  <td>Class</td>
                  <td>aptent</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>taciti</td>
                  <td>sociosqu</td>
                  <td>ad</td>
                  <td>litora</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>conubia</td>
                  <td>nostra</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
          </div>
       
        
        
        
        

<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">

    <title>Panel de Control</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/navLateral.css" rel="stylesheet">
     <link href="css/EstiloPanel.css" rel="stylesheet">


</head>
    
        <style type="text/css"> 

body { 
background-image: url(img/fondo.jpg); 
background-attachment: fixed; 
background-repeat: no-repeat; 
background-position: center center; 
}
    </style>

<body>

    <ul class="navigation">
	<li class="nav-item"><a href="#">Productos</a></li>
	<li class="nav-item"><a href="empleados.php">Empleados</a></li>
</ul>

<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger"></label>
    
    <div class="site-wrap">
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <center><h1>PRODUCTOS</h1></center>
                </div>
            </div>
            

            <form class="form" role="form" method="post" action="panel2.php" accept-charset="UTF-8" id="login-nav">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <b>Ingresar Nuevo Producto</b>
                            </div>
                            <div class="panel-body">
                                <form id="myForm">
                                <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <label>SKU: </label><br>
                                    <input name="txtsku" id="txtsku1" type="text" maxlength="5" class="form-control" placeholder="N&uacute;mero de Referencia" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <label>C&oacute;digo de Barras: </label><br>
                                    <input name="txtcodigo_barras" id="txtcodigo_barras1" type="text" class="form-control" placeholder="C&oacute;digo del Producto" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <label>Nombre: </label><br>
                                    <input name="txtnombre" id="txtnombre1" type="text" maxlength="50" class="form-control" placeholder="Nombre del Producto" aria-describedby="basic-addon1" required>
                                </div>
                                </div>
                                
                                <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Descripci&oacute;n: </label><br>
                                    <input name="txtdescripccion" id="txtdescipcion1" type="text" maxlength="100" class="form-control" placeholder="Descripci&oacute;n del Producto" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Fecha de Ingreso: </label><br>
                                    <input name="txtfecha" type="text" value="<?php echo date("d-m-Y");?>" class="form-control" placeholder="Fecha de Ingreso del Producto" aria-describedby="basic-addon1" disabled="true" required>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Costo: </label><br>
                                    <input name="txtcosto" id="txtcosto1" type="text" class="form-control" placeholder="Precio al P&uacute;blico" aria-describedby="basic-addon1" required>
                                </div>
                                </div>
                                
                                <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Precio Mayoreo: </label><br>
                                    <input name="txtprecioMay" id="txtprecioMay1" type="text" class="form-control" placeholder="Precio Mayoreo" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Precio Menudeo: </label><br>
                                    <input name="txtprecioMen" id="txtprecioMen1" type="text" class="form-control" placeholder="Precio Menudeo" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Cantidad: </label><br>
                                    <input name="txtcant" id="txtcant1" type="text" class="form-control" placeholder="Cantidad que se Ingresa" aria-describedby="basic-addon1" required>
                                </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                    <br>
                                    <center><button class="btn btn-info" onclick="formReset()" value="Reset">Borrar</button></center>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <center><button type="submit" name="submit" class="btn btn-info">Continuar</button></center>
                                </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <b>Consulta de Productos</b>
                        </div>
                        <div class="panel-body">
                            
                            <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="alert alert-info" role="alert">
                                    <span class="sr-only">Info:</span>
                                        <table>
                                            <tr>
                                                <td bgcolor="red">
                                                    &nbsp;&nbsp;&nbsp;
                                                </td>
                                                <td>
                                                    &nbsp;&nbsp;Menos de 10 productos&nbsp;&nbsp;
                                                </td>
                                                <td bgcolor="yellow">
                                                    &nbsp;&nbsp;&nbsp;
                                                </td>
                                                <td>
                                                    &nbsp;&nbsp;De 10 a 50 Productos&nbsp;&nbsp;
                                                </td>
                                                <td bgcolor="green">
                                                    &nbsp;&nbsp;&nbsp;
                                                </td>
                                                <td>
                                                   &nbsp;&nbsp;M&aacute;s de 50 Productos&nbsp;&nbsp;
                                                </td>
                                            </tr>
                                        </table>
                                </div>
                                <div style="overflow-x:auto;">
                
                <table class="table table-responsive" border="1">
        		<thead>
        			<tr>
                        <th>SKU</th>
        				<th>C&oacute;digo Barras</th>
                        <th>Nombre</th>
        				<th>Descripci&oacute;n</th>
                        <th>Fecha</th>
                        <th>Costo</th>
                        <th>Mayoreo</th>
                        <th>Menudeo</th>
                        <th>Cantidad</th>
                        <th>Categor&iacute;a</th>
                        <th>Almac&eacute;n</th>
                        <th>Proveedor</th>
        			</tr>
        		</thead>
                <?php                
                    if(!isset($_POST['submit']))
                    {
                        include("conexion.php");
                        $con=conectarse();
                        
                        $result=$con->query("SELECT * FROM producto");
                        if($result->num_rows > 0)
                        {
                ?>
                <?php
                while($row = $result->fetch_array())
                {
                    $cantidad = $row['cantidad'];                    

                    $id_categoria = $row['id_categoria'];
                    $id_provedor = $row['id_provedor'];
                    $id_almacen = $row['id_almacen'];
                ?>
        		<tbody>
        			<tr>
                        <td><?php echo $row['sku']; ?></td>
        				<td><?php echo $row['codigo_barras']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
        				<td><?php echo $row['descripcion']; ?></td>
                        <td><?php echo $row['fecha']; ?></td>
        				<td>$<?php echo $row['costo']; ?></td>
                        <td>$<?php echo $row['presio_may']; ?></td>
        				<td>$<?php echo $row['presio_men']; ?></td>
                        <?php
                        if($cantidad < 10)
                        {
                        ?>
                            <td bgcolor="red"><center><b><?php echo $cantidad ?></b></center></td>
        				<?php
                        }else if($cantidad >= 10 && $cantidad < 50)
                        {
                        ?>
                            <td bgcolor="yellow"><center><b><?php echo $cantidad ?></b></center></td>
                        <?php
                        }else if($cantidad >= 50)
                        {
                        ?>
                            <td bgcolor="green"><center><b><?php echo $cantidad ?></b></center></td>
                        <?php
                        }

                        $query = $con->query("SELECT nombre FROM categoria where id_categoria='$id_categoria'");
                        $rows = $query->num_rows;
                        if ($rows == 1) {
                            $r=$query->fetch_array();
                            $categoria = $r['nombre'];
                        }
                        ?>                        
                        <td><?php echo $categoria ?></td>

                        <?php
                        $query = $con->query("SELECT descripcion FROM almacen where id_almacen='$id_almacen'");
                        $rows = $query->num_rows;
                        if ($rows == 1) {
                            $r=$query->fetch_array();
                            $descripcion = $r['descripcion'];
                        }
                        ?>                        
                        <td><?php echo $descripcion ?></td>

                        <?php
                        $query = $con->query("SELECT nombre FROM provedor where id_provedor='$id_provedor'");
                        $rows = $query->num_rows;
                        if ($rows == 1) {
                            $r=$query->fetch_array();
                            $nombre = $r['nombre'];
                        }
                        ?>                        
        				<td><?php echo $nombre ?></td>
        			</tr>
                    <?php
                }
                ?> 
        		</tbody>
        	</table>
                                    </div>
                                               <?php
                }      
                }          
            ?>
                         </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function formReset()
        {
            document.getElementById("myForm").reset();
        }
        
       
        
    </script>
        <script type="text/javascript">
          
        $(document).ready(function(){
            $('#txtsku1').keyup(function(){
               this.value = (this.value + '').replace(/[^0-9]/g,''); 
            });
            
            $('#txtcodigo_barras1').keyup(function(){
               this.value = (this.value + '').replace(/[^0-9]/g,''); 
            });
            
            $('#txtnombre1').keyup(function(){
               this.value = (this.value + '').replace(/[^a-z A-Z]/g,''); 
            });
            
             $('#txtcosto1').keyup(function(){
               this.value = (this.value + '').replace(/[^0-9].[^0-9]/g,''); 
            });
            
            $('#txtprecioMay1').keyup(function(){
               this.value = (this.value + '').replace(/[^0-9].[^0-9]/g,''); 
            });
              $('#txtprecioMen1').keyup(function(){
               this.value = (this.value + '').replace(/[^0-9].[^0-9]/g,''); 
            });
            
            $('#txtcant1').keyup(function(){
               this.value = (this.value + '').replace(/[^0-9].[^0-9]/g,''); 
            });
            
        });
        </script>
    
    
</body>

</html>
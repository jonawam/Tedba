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
                    <center><h1>CATEGOR&Iacute;A DEL PRODUCTO</h1></center>
                </div>
            </div>
            
            <?php

                if(isset($_POST['submit']) && isset($_POST['txtsku']))
                {
                    $sku=$_POST['txtsku'];
                    $codBar=$_POST['txtcodigo_barras'];
                    $nombre=$_POST['txtnombre'];
                    $descripcion=$_POST['txtdescripccion'];                           
                    $costo=$_POST['txtcosto'];
                    $precioMay=$_POST['txtprecioMay'];
                    $precioMen=$_POST['txtprecioMen'];
                    $cantidad=$_POST['txtcant'];
                    $categoria=$_POST['Categoria'];                        
            ?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <b>Ingresar Nuevo Producto (3)</b>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <label>SKU: </label><br>
                                    <input id="txtsku" type="text" value="<?php echo $sku; ?>" class="form-control" aria-describedby="basic-addon1" disabled="true">
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <label>C&oacute;digo de Barras: </label><br>
                                    <input id="txtcodigo_barras" type="text" value="<?php echo $codBar; ?>" class="form-control" aria-describedby="basic-addon1" disabled="true">
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <label>Nombre: </label><br>
                                    <input id="txtnombre" type="text" value="<?php echo $nombre; ?>" class="form-control" aria-describedby="basic-addon1" disabled="true">
                                </div>
                                </div>
                                
                                <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Descripci&oacute;n: </label><br>
                                    <input id="txtdescripccion" type="text" value="<?php echo $descripcion; ?>" class="form-control" aria-describedby="basic-addon1" disabled="true">
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Fecha de Ingreso: </label><br>
                                    <input id="txtfecha" type="text" value="<?php echo date("Y-m-d"); ?>" class="form-control" aria-describedby="basic-addon1" disabled="true">
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Costo: </label><br>
                                    <input id="txtcosto" type="text" value="<?php echo $costo; ?>" class="form-control" aria-describedby="basic-addon1" disabled="true">
                                </div>
                                </div>
                                
                                <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Precio Mayoreo: </label><br>
                                    <input id="txtprecioMay" type="text" value="<?php echo $precioMay; ?>" class="form-control" aria-describedby="basic-addon1" disabled="true">
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Precio Menudeo: </label><br>
                                    <input id="txtprecioMen" type="text" value="<?php echo $precioMen; ?>" class="form-control" aria-describedby="basic-addon1" disabled="true">
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Cantidad: </label><br>
                                    <input id="txtcant" type="text" value="<?php echo $cantidad; ?>" class="form-control" aria-describedby="basic-addon1" disabled="true">
                                </div>
                                </div>
                                
                                <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Categor&iacute;a: </label><br>
                                    <input id="txtcategoria" type="text" value="<?php echo $categoria; ?>" class="form-control" aria-describedby="basic-addon1" disabled="true">
                                </div>
                                    <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Almac&eacute;n: </label><br>
                                    <select class="form-control" id="Almacen">
                                    <?php
                                            error_reporting(E_ALL);

                                            include("conexion.php");
                                            $con=conectarse();
                                                          
                                            $query = $con->query("SELECT descripcion FROM Almacen");
                                            $rows = $query->num_rows;

                                            if ($rows >= 1) {
                                                while($row = $query->fetch_array())
                                                {
                                    ?>
                                        <option><?php echo $row['descripcion']; ?></option>  
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Proveedor: </label><br>
                                    <select class="form-control" id="Proveedor">
                                    <?php
                                            error_reporting(E_ALL);
                                                          
                                            $query = $con->query("SELECT nombre FROM provedor");
                                            $rows = $query->num_rows;

                                            if ($rows >= 1) {
                                                while($row = $query->fetch_array())
                                                {
                                    ?>
                                        <option><?php echo $row['nombre']; ?></option> 
                                        <?php
                                            }
                                        }
                                        ?> 
                                    </select>
                                </div>
                                </div>
                                
                                <div class="row">
                                <div class="col-md-4 col-sm-4">
                                </div>
                                    <div class="col-md-4 col-sm-4">
                                    
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <center><button onclick="capturaDatosProducto()" class="btn btn-info">Guardar</button></center>
                                </div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>            
            <?php
                }
            ?>
        </div>
        <div id="respuesta" class="row">
                            
        </div>

    
    <script src="js/jquery-3.1.1.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/registrarProducto.js"></script>


</body>

</html>
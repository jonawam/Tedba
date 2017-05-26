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
            <?php

                if(isset($_POST['submit']))
                {
                    $sku=$_POST['txtsku'];
                    $codBar=$_POST['txtcodigo_barras'];
                    $nombre=$_POST['txtnombre'];
                    $descripcion=$_POST['txtdescripccion'];                           
                    $costo=$_POST['txtcosto'];
                    $precioMay=$_POST['txtprecioMay'];
                    $precioMen=$_POST['txtprecioMen'];
                    $cantidad=$_POST['txtcant'];
            ?>
            <form class="form" role="form" method="post" action="panel3.php" accept-charset="UTF-8" id="login-nav">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <b>Ingresar Nuevo Producto (2)</b>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <label>SKU: </label><br>
                                    <input name="txtsku" type="text" value="<?php echo $sku?>" class="form-control" aria-describedby="basic-addon1" />
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <label>C&oacute;digo de Barras: </label><br>
                                    <input name="txtcodigo_barras" type="text" value="<?php echo $codBar ?>" class="form-control" aria-describedby="basic-addon1" />
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <label>Nombre: </label><br>
                                    <input name="txtnombre" type="text" value="<?php echo $nombre; ?>" class="form-control" aria-describedby="basic-addon1" />
                                </div>
                                </div>
                                
                                <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Descripci&oacute;n: </label><br>
                                    <input name="txtdescripccion" type="text" value="<?php echo $descripcion; ?>" class="form-control" aria-describedby="basic-addon1"/>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Fecha de Ingreso: </label><br>
                                    <input name="txtfecha" type="text" value="<?php echo date("Y-m-d");?>" class="form-control" aria-describedby="basic-addon1" />
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Costo: </label><br>
                                    <input name="txtcosto" type="text" value="<?php echo $costo; ?>" class="form-control" aria-describedby="basic-addon1" />
                                </div>
                                </div>
                                
                                <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Precio Mayoreo: </label><br>
                                    <input name="txtprecioMay" type="text" value="<?php echo $precioMay; ?>" class="form-control" aria-describedby="basic-addon1"/>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Precio Menudeo: </label><br>
                                    <input name="txtprecioMen" type="text" value="<?php echo $precioMen; ?>" class="form-control" aria-describedby="basic-addon1"/>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Cantidad: </label><br>
                                    <input name="txtcant" type="text" value="<?php echo $cantidad; ?>" class="form-control" aria-describedby="basic-addon1" />
                                </div>
                                </div>
                                
                                <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Categor&iacute;a: </label><br>
                                    <select class="form-control" name="Categoria">
                                        <option value="Almacenamiento">Almacenamiento</option> 
                                        <option value="Protector">Protector</option> 
                                        <option value="Micas">Micas</option>
                                        <option value="Cable">Cable</option>  
                                    </select>

                                </div>
                                    <div class="col-md-6 col-sm-6">
                                    
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <br>
                                    <br>
                                    <center><button type="submit" name="submit" class="btn btn-info">Continuar</button></center>
                                </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
        </form>
        <?php
            }
        ?>
        </div>

    
    <script src="js/jquery-3.1.1.min.js"></script>

    <script src="js/bootstrap.min.js"></script>


</body>

</html>
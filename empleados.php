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
	<li class="nav-item"><a href="panel.php">Productos</a></li>
	<li class="nav-item"><a href="#">Empleados</a></li>
</ul>

<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger"></label>
    
    <div class="site-wrap">
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <center><h1>EMPLEADOS</h1></center>
                </div>
            </div>
            

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <b>Ingresar Nuevo Producto</b>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <label>Nombre(s): </label><br>
                                    <input id="txtNombre" type="text" maxlength="50" class="form-control" placeholder="Nombre del Empleado" aria-describedby="basic-addon1">
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <label>Apellidos: </label><br>
                                    <input id="txtApellidos" type="text" maxlength="50" class="form-control" placeholder="Apellidos del Empleado" aria-describedby="basic-addon1">
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <label>Sexo: </label><br>
                                    <center>
                                    <input id="radMasculino" type="radio" name="rdSexo" value="Masculino">Masc. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input id="radFemenino" type="radio" name="rdSexo" value="Femenino">Fem.
                                        </center>
                                </div>
                                </div>
                                
                                <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>C&oacute;digo Empleado: </label><br>
                                    <input id="txtCodEmp" type="text" maxlength="5" class="form-control" placeholder="C&oacute;digo del Empleado" aria-describedby="basic-addon1">
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Tel&eacute;fono: </label><br>
                                    <input id="txtTelefono" type="text" maxlength="10" class="form-control" placeholder="Tel&eacute;fono del Empleado" aria-describedby="basic-addon1">
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Direcci&oacute;n: </label><br>
                                    <input id="txtDireccion" type="text" maxlength="50" class="form-control" placeholder="Direcci&oacute;n del Empleado" aria-describedby="basic-addon1">
                                </div>
                                </div>
                                
                                <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <label>Sucursal: </label><br>
                                    <select id="selectSucursal" class="form-control" name="Categoria">
                                    <?php
                                        error_reporting(E_ALL);

                                        include("conexion.php");
                                        $con=conectarse();
                                                      
                                        $query = $con->query("SELECT direccion FROM Sucursal");
                                        $rows = $query->num_rows;

                                        if ($rows >= 1) {
                                            while($row = $query->fetch_array())
                                            {
                                    ?>
                                        <option><?php echo $row['direccion']; ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <br>
                                    <br>
                                    <center><button class="btn btn-info" onclick="capturaDatosEmpleado()">Registrar</button></center>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            <div id="respuesta" class="row">
                            
            </div>
                                
                            <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <img src="img/work.png" class="img-thumbnail zoom">
                         </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                <img src="img/work2.jpg" class="img-thumbnail zoom">
                         </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                <img src="img/work3.png" class="img-thumbnail zoom">
                         </div>
                            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/registrarEmpleado.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('#txtCodEmp').keyup(function(){
               this.value = (this.value + '').replace(/[^0-9]/g,''); 
            });
            
            $('#txtTelefono').keyup(function(){
               this.value = (this.value + '').replace(/[^0-9]/g,''); 
            });
            
            $('#txtNombre').keyup(function(){
               this.value = (this.value + '').replace(/[^a-z A-Z]/g,''); 
            });
            
            $('#txtApellidos').keyup(function(){
               this.value = (this.value + '').replace(/[^a-z A-Z]/g,''); 
            });
            
            $('#txtDireccion').keyup(function(){
               this.value = (this.value + '').replace(/[^a-z A-Z-#.0-9]/g,''); 
            });
        });
        </script>

</body>

</html>
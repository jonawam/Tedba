<script language= javascript type= text/javascript >

function limpiarCajas(){
      document.getElementById('txtNombre').value= ""; 
      document.getElementById('txtApellidos').value= ""; 
      document.getElementById('txtCodEmp').value= ""; 
      document.getElementById('txtTelefono').value= ""; 
      document.getElementById('txtDireccion').value= ""; 
      document.getElementById('radMasculino').checked= false; 
      document.getElementById('radFemenino').checked= false; 
};
</script >

<?php
error_reporting(E_ALL);
//variables para recuperar los datos

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$sexo = $_POST["sexo"];
$codEmp = $_POST["codEmp"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$sucursal = $_POST["sucursal"];

include("conexion.php");
$con=conectarse();

$query = $con->query("SELECT id_sucursal FROM sucursal where direccion='$sucursal'");
$rows = $query->num_rows;

if ($rows == 1) {
	$r=$query->fetch_array();
	$id_sucursal = $r['id_sucursal'];
}

$query = utf8_decode("insert into empleado (nombre_empleado,apellido_empleado,sexo_empleado,codigo_empleado,
	telefono,direccion,id_sucursal) 
		values ('$nombre','$apellidos','$sexo',$codEmp,'$telefono','$direccion',$id_sucursal)");
//echo $query;
$resultadoOperacion = $con->query($query);
if ($resultadoOperacion) {
?>
    <div class="text-success text-center">
        <h1><p>Empleado registrado con &eacute;xito!</p></h1>
    </div>
<?php
	echo "<script>";	
	echo "limpiarCajas();";
	echo "</script>";
}
else{
?>
    <div class="text-danger text-center">
        <h1><p>Empleado NO registrado!</p></h1>
    </div>
<?php
}

?>
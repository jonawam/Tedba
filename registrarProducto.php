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

$sku = $_POST["sku"];
$codBarras = $_POST["codBarras"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$fecha = $_POST["fecha"];
$costo = $_POST["costo"];
$precioMay = $_POST["precioMay"];
$precioMen = $_POST["precioMen"];
$cantidad = $_POST["cantidad"];
$categoria = $_POST["categoria"];
$almacen = $_POST["almacen"];
$provedor = $_POST["provedor"];

include("conexion.php");
$con=conectarse();

$query = $con->query("SELECT id_categoria FROM categoria where nombre='$categoria'");
$rows = $query->num_rows;
if ($rows == 1) {
	$r=$query->fetch_array();
	$id_categoria = $r['id_categoria'];
}

$query = $con->query("SELECT id_provedor FROM provedor where nombre='$provedor'");
$rows = $query->num_rows;
if ($rows == 1) {
  $r=$query->fetch_array();
  $id_provedor = $r['id_provedor'];
}

$query = $con->query("SELECT id_almacen FROM almacen where descripcion='$almacen'");
$rows = $query->num_rows;
if ($rows == 1) {
  $r=$query->fetch_array();
  $id_almacen = $r['id_almacen'];
}

$query = utf8_decode("insert into producto (sku,codigo_barras,nombre,descripcion,costo,presio_may,presio_men,cantidad,
  fecha,id_categoria,id_provedor,id_almacen) 
    values ($sku,$codBarras,'$nombre','$descripcion',$costo,$precioMay,$precioMen,$cantidad,'$fecha',$id_categoria,
      $id_provedor,$id_almacen)");

//echo $query;
$resultadoOperacion = $con->query($query);
if ($resultadoOperacion) {
?>
    <div class="text-success text-center">
        <h1><p>Producto registrado con &eacute;xito!</p></h1>        
    </div>

    <meta http-equiv='refresh' content='1; url=panel.php' />
<?php
echo '<script type="text/javascript">
            alert("Producto Insertado Exitosamente!!!!!");
           setTimeout(function () {
               window.location.href = "./panel.php";}, 2000);
      </script>';
}
else{
    echo '<script type="text/javascript">
            alert("No se inserto su producto\nvuelve a intentarlo!!!!!");
           setTimeout(function () {
               window.location.href = "./panel.php";}, 2000);
      </script>';

}

?>
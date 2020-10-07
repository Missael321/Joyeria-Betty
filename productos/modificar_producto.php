<?php
require_once("../conexion/conexion.php");
$codigoProducto = $_POST['codigoProducto'];
$ID_proveedor = $_POST['ID_proveedor'];
$descripcion = $_POST['descripcion'];
$existencia = $_POST['existencia'];
$precioVenta = $_POST['precioVenta'];

switch ($precioVenta) {
	case $precioVenta >=100 && $precioVenta <= 199.99:
		$numGrupo = 1;
		break;

		case $precioVenta >=200 && $precioVenta <= 299.99:
		$numGrupo = 2;
		break;

		case $precioVenta >=300 && $precioVenta <= 399.99:
		$numGrupo = 3;
		break;

		case $precioVenta >=400 && $precioVenta <= 499.99:
		$numGrupo = 4;
		break;

		case $precioVenta >=500 && $precioVenta <= 599.99:
		$numGrupo = 5;
		break;

		case $precioVenta >=600 && $precioVenta <= 699.99:
		$numGrupo = 6;
		break;

		case $precioVenta >=700 && $precioVenta <= 799.99:
		$numGrupo = 7;
		break;

		case $precioVenta >=800 && $precioVenta <= 899.99:
		$numGrupo = 8;
		break;

		case $precioVenta >=900 && $precioVenta <= 999.99:
		$numGrupo = 9;
		break;

		case $precioVenta >=1000 && $precioVenta <= 1099.99:
		$numGrupo = 10;
		break;

		case $precioVenta >=1100 && $precioVenta <= 1199.99:
		$numGrupo = 11;
		break;

		case $precioVenta >=1200 && $precioVenta <= 1299.99:
		$numGrupo = 12;
		break;

		case $precioVenta >=1300 && $precioVenta <= 1399.99:
		$numGrupo = 13;
		break;

		case $precioVenta >=1400 && $precioVenta <= 1500:
		$numGrupo = 14;
		break;
}

	$nombre = $_FILES['imagen']['name'];
	$tipo = $_FILES['imagen']['type'];
	$ruta = "images/".$nombre;
	$archivo = $_FILES['imagen']['tmp_name'];
	$allow = move_uploaded_file($archivo, '../'.$ruta);

  mysqli_query ($link, "UPDATE productos SET ID_proveedor='$ID_proveedor', descripcion='$descripcion', imagen='$ruta', existencia='$existencia', precioVenta='$precioVenta', numGrupo='$numGrupo' WHERE codigoProducto = '$codigoProducto'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='consultar_producto.php';
                </script>";
?>
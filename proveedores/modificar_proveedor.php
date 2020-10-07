<?php
require_once("../conexion/conexion.php");
$ID_proveedor = $_POST['ID_proveedor'];
$RFC_proveedor = $_POST['RFC_proveedor'];
$nombreProveedor = $_POST['nombreProveedor'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];


  mysqli_query($link,"UPDATE proveedor SET RFC_proveedor=UPPER('$RFC_proveedor'), nombreProveedor='$nombreProveedor', telefono='$telefono', correo='$correo' WHERE ID_proveedor='$ID_proveedor'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='consultar_proveedor.php';
                </script>";
?>
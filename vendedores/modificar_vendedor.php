<?php
require_once("../conexion/conexion.php");
$ID_vendedor = $_POST['ID_vendedor'];
$nombreVendedor = $_POST['nombreVendedor'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];


  mysqli_query($link,"UPDATE vendedor SET nombreVendedor='$nombreVendedor', telefono='$telefono', correo='$correo', direccion='$direccion' WHERE ID_vendedor='$ID_vendedor'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='consultar_vendedor.php';
                </script>";
?>
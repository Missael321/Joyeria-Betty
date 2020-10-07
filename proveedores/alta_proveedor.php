<?php

require_once "../conexion/conexion.php";
$RFC_proveedor = $_POST['RFC_proveedor'];
$nombreProveedor = $_POST['nombreProveedor'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$sql = "INSERT INTO proveedor(RFC_proveedor, nombreProveedor, telefono, correo)VALUES (UPPER('$RFC_proveedor'), '$nombreProveedor', '$telefono', '$correo')";

$consulta=mysqli_query($link, $sql);

  echo "
 
<script>
    if(confirm(\"\u00bfDesea realizar un nuevo registro?\")){
                window.location.href='registrar_proveedor.php';
                }else{
                window.location.href='consultar_proveedor.php';
                }
 </script>";
?>
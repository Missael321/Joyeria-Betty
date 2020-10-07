<?php

require_once "../conexion/conexion.php";
$nombreVendedor = $_POST['nombreVendedor'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];

$sql = "INSERT INTO vendedor(nombreVendedor, telefono, correo, direccion)
VALUES ('$nombreVendedor', '$telefono', '$correo', '$direccion')";

$consulta=mysqli_query($link, $sql);

  echo "
 
<script>
    if(confirm(\"\u00bfDesea realizar un nuevo registro?\")){
                window.location.href='registrar_vendedor.php';
                }else{
                window.location.href='consultar_vendedor.php';
                }
 </script>";
?>
<?php
require_once("../conexion/conexion.php");
$opcion = $_GET['opcion'];

    
    $result=mysqli_query($link,"DELETE FROM Productos WHERE codigoProducto='$opcion'");
    if(mysqli_affected_rows($link)!=0)
    {
      echo "<script language='JavaScript'>
      alert('Registro eliminado...');
      document.location='consultar_producto.php';
      </script>";
    }
?>
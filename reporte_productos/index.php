<?php
require "fpdf.php";
require_once("../conexion/conexion.php");
class PDF extends FPDF{
  function Header()
{
    // Logo     el 83 define el tamaño el 10 es un tab, el 8 es lineas
    $this->Image('logo.png',20,8,20);
}
}
//CREACION DE LA HOJA
//$years=$_GET['years'];
$pdf = new PDF('P', 'mm','Letter');
$pdf->setMargins(20,18);
$pdf->AliasNbPages();
$pdf->AddPage();

//TITULO
$pdf->SetTextColor(0x00,0x00,0x00);
$pdf->SetFont('Arial','b',7);
$pdf->Cell(0,5,'JOYERÍA BETY',0,1,'C');
$pdf->Cell(0,5,'Productos Registrados ',0,1,'C');


  $pdf->Ln();

  
  //segundo grupo lactantes2
  $pdf->Ln();
  
  //1 indica borde, 0 no hace salto de linea, c es centrado
$result = mysqli_query($link, "SELECT codigoProducto, ID_proveedor, descripcion, existencia, precioVenta, numGrupo FROM Productos"); 
  
//$result = mysql_query($consulta);
$pdf->Ln();
    //aqui agregue las cabeceras de las tablas
    $pdf->Cell(10,5, "ID",1,0,'C');
    $pdf->Cell(40,5, "Proveedor",1,0,'C');
    $pdf->Cell(40,5, "Descripción",1,0,'C');
    $pdf->Cell(20,5, "Existencias",1,0,'C');
    $pdf->Cell(25,5, "Precio de Venta",1,0,'C');
    $pdf->Cell(30,5, "Número de Grupo",1,0,'C');
while($row = mysqli_fetch_array($result)){ 
    $pro = $row[1];
    $query = mysqli_query($link, "SELECT nombreProveedor FROM Proveedor WHERE ID_proveedor = '$pro'");
    $fila = mysqli_fetch_array($query);
    $pdf->Ln();
    $pdf->Cell(10,5, $row[0],1,0,'C');
    $pdf->Cell(40,5, $fila[0],1,0,'C');
    $pdf->Cell(40,5, $row[2],1,0,'C');
    $pdf->Cell(20,5, $row[3],1,0,'C');
    $pdf->Cell(25,5, $row[4],1,0,'C');
    $pdf->Cell(30,5, $row[5],1,0,'C');
 
 
    //$exec=mysql_query($consulta); 


  
  }  

  mysqli_close($link);
$pdf->Output();
?>
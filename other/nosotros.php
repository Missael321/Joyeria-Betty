<?php 
require "../require/reports.php";
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Joyería Bety</title>
  <link rel="shortcut icon" href="../images/icon.ico">
  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
     <img src="../images/Logotipo.png" height="58" width="48">
      <a class="navbar-brand text-white" href="../index.php">Página Principal</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto"> 
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Productos
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item text-primary" href="../productos/registrar_producto.php">Registrar</a>
              <a class="dropdown-item text-primary" href="../productos/consultar_producto.php">Consultar</a>
              <a class="dropdown-item text-primary" onClick='abrirReporteProducto()'>Generar Reporte</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Vendedores
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item text-primary" href="../vendedores/registrar_vendedor.php">Registrar</a>
              <a class="dropdown-item text-primary" href="../vendedores/consultar_vendedor.php">Consultar</a>
              <a class="dropdown-item text-primary" onClick='abrirReporteVendedor()'>Generar Reporte</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Proveedores
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item text-primary" href="../proveedores/registrar_proveedor.php">Registrar</a>
              <a class="dropdown-item text-primary" href="../proveedores/consultar_proveedor.php">Consultar</a>
              <a class="dropdown-item text-primary" onClick='abrirReporteProveedor()'>Generar Reporte</a>
            </div>
          </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Nosotros
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item text-primary" href="contact.php">Contáctanos</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 <div class="container my-4">
  <img src="../images/picture13.jpg" class="img fluid" alt="Responsive image"; height="450" width="1120">
  <div class="text-encima lead"><span style="color:#ffffff">¿Sabías que?...</div>
  <div class="center"><span style="color:#ffffff">
   Contamos con más de 50 años de experiencia.<br>Estamos dentro del top 3 de las mejores joyerías de Latinoámerica.</div>
 </div>
 &nbsp 
  &nbsp
  <hr color="gray" size="4">
 <center><h1> <b>Somos la puerta de entrada al mundo de la joyería <br> clásica y moderna</b></h1></center>
 &nbsp
  &nbsp
   &nbsp
   <hr color="gray" size="4">
    <div class="row my-5 mx-5">
      <div class="col-lg-6">
        <img class="img-fluid rounded mb-4" src="../images/picture10.jpg"alt=""; height="500" width="700">
      </div>
      <div class="col-lg-6">
        <h2> Un poco de nuestra historia</h2>
        <p class="text-justify"><span style="color: black; font-style: italic;">El negocio comenzó en los años 70's como algo familiar, era un comercio pequeño que se dedicaba a satisfacer conocidos y a los más allegados a la famila. Con el tiempo, se decidió invertir más en el negocio y encontrar produtos de mucha mayor calidad.</p>
        <p><span style="color: black; font-style: italic;">
        La joyería despegó y comenzó a comercializar al mayoreo y menudeo. Rápidamente nos posicionamos como una de las mejores joyerías de la región. El negocio se expandió y se comenzaron a abrir nuevas sucursales en el país.</p>
        <p><span style="color: black; font-style: italic;">
        Al principio nos fue difícil hacer que la gente nos comprara, pero con nuestro excelente servicio, fuimos poco a poco ganándonos la confianza de la gente y el respaldo de nuestros inversores, así como también buena fama entre nuestros proveedores. Ha sido difícil pero con la mentalidad de ofrecerte siempre lo mejor hemos llegado muy lejos, prometiendo un futuro prodigioso. Sin embargo... </p>
      <div class="card-footer">
            <a href="#" class="btn btn-primary">Leer artículo completo...</a>
          </div>
      </div>
      <div class="col-lg-6 my-5">
        <h2 class="text-center">Integrantes:</h2>
        <p class="text-justify"><span style="color: black; font-style: italic;">
      <div class="card-footer text-center text-primary">
            <p>
              <ul>
              Yosvandi de Jesus Felipe Zunun
              <br>
              Johny Gudiel Hernández Cárdenas
              <br>
              Missael Benjamín López López
              <br>
              Luis Daniel Penagos May
              <br>
              Iram Hassael Sánchez Nájera
              <br>
              Rosa Hilaria Sántiz Gómez
              <br>
              <br>
              Desarrollo de Software Multiplataforma 3B
            </ul>
          </p>
          </div>
      </div>
    </div>
    <hr color="gray" size="5">
  <hr color="gray" size="5">
    <footer class="py-5 bg-light">
      <div class="container">
    <div class="row">
      <div class="col-lg-1.5 mb-4 mx-2">
        <div>
        <div>
        <a href="index.php">
          <img src="../images/Logotipo.png" height="196" width="140">
        </a>
          </div>
        </div>
      </div>
      <div class="col-lg-1.5 mb-4 mx-2">
        <div>
        <div>
          <p class="font-weight-bold lead text-primary">Productos</p>
         <ul>
          <a href="../productos/registrar_producto.php" class="text-primary">Registrar</a>
          <br>
           <a href="../productos/consultar_producto.php">Consultar</a>
           <br>
           <a onClick='abrirReporteProducto()'>Generar Reporte</a>
         </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-1.5 mb-4 mx-2">
        <div>
        <div>
          <p class="font-weight-bold lead text-primary">Vendedores</p>
         <ul>
          <a href="../vendedores/registrar_vendedor.php" class="text-primary">Registrar</a>
          <br>
           <a href="../vendedores/consultar_vendedor.php">Consultar</a>
           <br>
           <a onClick='abrirReporteVendedor()'>Generar Reporte</a>
         </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-1.5 mb-4 mx-2">
        <div>
        <div>
          <p class="font-weight-bold lead text-primary">Proveedores</p>
         <ul>
          <a href="../proveedores/registrar_proveedor.php" class="text-primary">Registrar</a>
          <br>
           <a href="../proveedores/consultar_proveedor.php">Consultar</a>
           <br>
           <a onClick='abrirReporteProveedor()'>Generar Reporte</a>
         </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-1.5 mb-4 mx-2">
        <div>
        <div>
          <p class="font-weight-bold lead text-primary">Nosotros</p>
         <ul>
          <a href="nosotros.php" class="text-primary">¿Quienes somos?</a>
          <br>
           <a href="contact.php">Contáctanos</a>
         </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-2 mb-4 mx-5">
        <div>
        <div>
          <img src="../images/f.png" height="45" width="45">
          <img src="../images/twitter.png" height="45" width="45">
          <img src="../images/instagram.png" height="45" width="45">
          <br>
          <p class="text-center lead text-primary font-weight-bold">/bety_joyeria</p>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <p class="m-0 text-center text-primary">Joyería Bety &copy; Derechos reservados
      <br>
      Junio, 2020
    </p>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

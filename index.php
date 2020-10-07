<?php 
require "reports.php";
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Joyería Bety</title>
  <link rel="shortcut icon" href="images/icon.ico">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
     <img src="images/Logotipo.png" height="58" width="48">
      <a class="navbar-brand text-white" href="index.php">Página Principal</a>
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
              <a class="dropdown-item text-primary" href="productos/registrar_producto.php">Registrar</a>
              <a class="dropdown-item text-primary" href="productos/consultar_producto.php">Consultar</a>
              <a class="dropdown-item text-primary" onClick='abrirReporteProducto()'>Generar Reporte</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Vendedores
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item text-primary" href="vendedores/registrar_vendedor.php">Registrar</a>
              <a class="dropdown-item text-primary" href="vendedores/consultar_vendedor.php">Consultar</a>
              <a class="dropdown-item text-primary" onClick='abrirReporteVendedor()'>Generar Reporte</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Proveedores
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item text-primary" href="proveedores/registrar_proveedor.php">Registrar</a>
              <a class="dropdown-item text-primary" href="proveedores/consultar_proveedor.php">Consultar</a>
              <a class="dropdown-item text-primary" onClick='abrirReporteProveedor()'>Generar Reporte</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Nosotros
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item text-primary" href="other/nosotros.php">¿Quienes Somos?</a>
              <a class="dropdown-item text-primary" href="other/contact.php">Contáctanos</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="my-4">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
       <div class="carousel-item active" style="background-image: url('images/10.jpg')">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('images/11.jpg')">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('images/12.jpg')">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('images/13.jpg')">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <div class="container">
    <?php 
    require_once ("conexion/conexion.php");
    $sql = "SELECT * FROM productos";
    $total = mysqli_num_rows(mysqli_query($link, $sql));
    if($total == 0){?>
      <h1 class="display-4 text-center">No hay Productos Registrados</h1>
    <br>
    <br>
    <div class="text-center">
      <a href="productos/registrar_producto.php">
        <button class="btn-primary">Registrar Nuevo Producto</button>
      </a>
     <hr>
     <br>
     </div>
     <?php 
    } else {
    ?>
    <h1 class="my-4 text-primary">Agregados Recientemente...</h1>
    <div class="row mx-5 mx-2">
      <?php
    $j = 0; 
    if ($total > 9) {
      $total = 9;
    }
      for ($i=0; $i<=$total-1; $i++) {
        $nom = "SELECT codigoProducto, imagen FROM Productos WHERE codigoProducto = (SELECT MAX(codigoProducto) - $j FROM Productos)";
        $j = $j+1;
        $query = mysqli_query($link, $nom);
        $fila = mysqli_fetch_array($query);
        $count = mysqli_num_rows($query);
        while ($count == 0) {
        $nom = "SELECT codigoProducto, imagen FROM Productos WHERE codigoProducto = (SELECT MAX(codigoProducto) - $j FROM Productos)";
        $j = $j+1;
        $query = mysqli_query($link, $nom);
        $fila = mysqli_fetch_array($query);
        $count = mysqli_num_rows($query);
      }
        ?>

      <div class="my-1 mx-2 col-lg-2.5 text-center">
        <div>
        <div> 
                <img src="<?php echo $fila['imagen'] ?>" width="250" height="150">
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary mx-5">Agregar a Pedidos</a>
          </div>
        </div>
      </div>
  <?php }
  } ?>
  <hr>
  <br>
</div>
      <h1 class="my-4 mx-5 text-primary">Descubre Lo Que Tenemos Para Ti...</h1>
      <div class="carousel-inner" role="listbox">
       <div class="carousel-item active" style="background-image: url('images/8.jpg')">
        <p class="text-primary lead font-weight-bold text-center d-inline-block my-5 mx-5">
        Mira la gran variedad de aretes, 
        <br>
        cadenas, dijes, etc.
        <br>
        que tenemos para ti. 
        <br>
        
        </p>
      </div>
    </div>
    <br>
    <hr>
  <footer class="py-5 bg-light">
      <div class="container">
    <div class="row">
      <div class="col-lg-1.5 mb-4 mx-2">
        <div>
        <div>
        <a href="index.php">
          <img src="images/Logotipo.png" height="196" width="140">
        </a>
          </div>
        </div>
      </div>
      <div class="col-lg-1.5 mb-4 mx-2">
        <div>
        <div>
          <p class="font-weight-bold lead text-primary">Productos</p>
         <ul>
          <a href="productos/registrar_producto.php" class="text-primary">Registrar</a>
          <br>
           <a href="productos/consultar_producto.php">Consultar</a>
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
          <a href="vendedores/registrar_vendedor.php" class="text-primary">Registrar</a>
          <br>
           <a href="vendedores/consultar_vendedor.php">Consultar</a>
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
          <a href="proveedores/registrar_proveedor.php" class="text-primary">Registrar</a>
          <br>
           <a href="proveedores/consultar_proveedor.php">Consultar</a>
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
          <a href="other/nosotros.php" class="text-primary">¿Quienes somos?</a>
          <br>
           <a href="other/contact.php">Contáctanos</a>
         </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-2 mb-4 mx-">
        <div>
        <div>
          <img src="images/f.png" height="45" width="45">
          <img src="images/twitter.png" height="45" width="45">
          <img src="images/instagram.png" height="45" width="45">
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

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
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
              <a class="dropdown-item text-primary" href="registrar_proveedor.php">Registrar</a>
              <a class="dropdown-item text-primary" href="consultar_proveedor.php">Consultar</a>
              <a class="dropdown-item text-primary" onClick='abrirReporteProveedor()'>Generar Reporte</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Nosotros
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item text-primary" href="../other/nosotros.php">¿Quienes Somos?</a>
              <a class="dropdown-item text-primary" href="../other/contact.php">Contáctanos</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <h3 class=" text-center text-primary my-5 mx-5"><b>Modificar datos de un proveedor</b></h3>
  <?php 
    require_once ("../conexion/conexion.php");
    $opcion = $_GET['ID_proveedor'];
    $result=mysqli_query($link,"SELECT * FROM proveedor WHERE ID_proveedor = '$opcion'");
    $consulta = mysqli_fetch_array($result);
    ?>
      <div class="container">
        <div>
          <div class="col-md-10 col-md-offset-2">
              <div class="panel panel-primary">
                      
                      <table width="100%">
                      <form action="modificar_proveedor.php" method="post" id="frmproveedor" enctype="multipart/form-data">
                      <tr class="espacio"> 
                      <input type="hidden" class="form-control" name="ID_proveedor" id="ID_proveedor" value="<?php echo $consulta['ID_proveedor'];?>">
                      </tr> 
                      <td align="right"> <label for="RFC_proveedor">RFC:</label></td><td><input type="text" class="form-control my-2 text-uppercase" name="RFC_proveedor" id="RFC_proveedor" autofocus autocomplete="off" minlength="13" maxlength="13" value="<?php echo $consulta['RFC_proveedor'];?>" pattern="[a-zA-Z0-9]+" title="Escribe el RFC del Proveedor SIN espacios o símbolos"></td>
                      </tr> 
                      <tr class="espacio"> 
                      <td align="right"> <label for="nombreProveedor">Nombre:</label></td><td><input type="text" class="form-control my-2" name="nombreProveedor" id="nombreProveedor" required autocomplete="off" pattern="[A-Za-z ]+" value="<?php echo $consulta['nombreProveedor'];?>" title="Ingresa el nombre del Proveedor SIN acentos o números"></td>
                      </tr>
                      <tr class="espacio"> 
                      <td align="right"> <label for="telefono">Teléfono:</label></td><td><input type="text" class="form-control" name="telefono" id="telefono" minlength="10" maxlength="10" required pattern="[0-9]+" autocomplete="off" value="<?php echo $consulta['telefono'];?>" title="Ingresa un número telefonico válido e.j: 9191234812"></td>
                      </tr>
                      <tr class="espacio"> 
                      <td align="right"> <label for="correo">Correo:</label></td><td><input type="email" class="form-control my-2" name="correo" id="correo" required autocomplete="off" value="<?php echo $consulta['correo'];?>" title="Ingresa una dirección de correo válido e.j: correo@mail.com" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"></td>
                      </tr>  
                      <tr>
                      <td align="center" colspan="2"><input type="submit"  name="registrar" class="btn btn-primary" value="Modifiicar Datos"  title="Registrar"></td>
                      </tr>
                      </form>
                      </table>
                      </div>
                      </div>
          </div>
        </div>

        
  <footer class="py-5 bg-light">
    <div class="container">
      <div class="container">
    <div class="row">
      <div class="col-lg-2.5 mb-4">
        <div>
        <div>
         <a href="../other/index.php">
          <img src="../images/Logotipo.png" height="216" width="160">
        </a>
          </div>
        </div>
      </div>
      <div class="col-lg-2.5 mb-4 mx-2">
        <div>
        <div>
          <p class="font-weight-bold lead text-primary">Productos</p>
         <ul>
          <a href="registrar_producto.php" class="text-primary">Registrar</a>
          <br>
           <a href="consultar_producto.php">Consultar</a>
           <br>
           <a onClick='abrirReporteProducto()'>Generar Reporte</a>
         </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-2.5 mb-4 mx-2">
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
      <div class="col-lg-2.5 mb-4 mx-2">
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
      <div class="col-lg-2.5 mb-4 mx-2">
        <div>
        <div>
          <p class="font-weight-bold lead text-primary">Nosotros</p>
         <ul>
          <a href="../other/nosotros.php" class="text-primary">¿Quienes somos?</a>
          <br>
           <a href="../other/contact.php">Contáctanos</a>
         </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-2.5 mb-4 mx-4">
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
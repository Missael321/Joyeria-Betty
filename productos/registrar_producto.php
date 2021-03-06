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
              <a class="dropdown-item text-primary" href="consultar_producto.php">Consultar</a>
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
              <a class="dropdown-item text-primary" href="../other/nosotros.php">¿Quienes Somos?</a>
              <a class="dropdown-item text-primary" href="../other/contact.php">Contáctanos</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <h3 class=" text-center text-primary my-5 mx-5"><b>Registro de un nuevo producto</b></h3>
  <?php 

    require_once ("../conexion/conexion.php");
    $sql = "SELECT * FROM proveedor";
    $total = @mysqli_num_rows(mysqli_query($link, $sql));
    if($total == 0){
   ?>
   <h1 class="display-4 text-center">No hay Proveedores Registrados</h1>
   <p class="text-center">Para empezar a registrar productos, debes registrar primero a los proveedores
    <br>
    <br>
   <a href="../proveedores/registrar_proveedor.php">
     <button class="btn-primary">Registrar Proveedor</button>
   </a>
   </p>
   <?php 
    } else {
    ?>
      <div class="container">
        <div>
          <div class="col-md-10 col-md-offset-2">
              <div class="panel panel-primary">
                      
                      <table width="100%">
                      <form action="alta_producto.php" method="POST" id="frmproducto" enctype="multipart/form-data"> 
                      <tr class="espacio">
                      <td align="right"><label for="ID_proveedor">Proveedor:</label></td>
                      <td>
                        <select class="select-primary" name="ID_proveedor" id="ID_proveedor">
                          <?php 
                            $sql = "SELECT ID_proveedor, nombreProveedor FROM proveedor ORDER BY nombreProveedor";
                            $consulta = mysqli_query($link, $sql);

                            while ( $fila = mysqli_fetch_array($consulta) ) {
                           ?>
                           <option value="<?php echo $fila['ID_proveedor']  ?>"><?php echo $fila['nombreProveedor']?></option>
                         <?php } ?>
                        </select>
                      </td>
                      </tr> 
                      <tr class="espacio"> 
                      <td align="right"> <label for="descripcion">Descripción:</label></td><td><input type="text" class="form-control my-2" name="descripcion" id="descripcion" placeholder="Ingresa la descripción del producto" required autocomplete="off" title="Ingresa la descripción del Producto SIN acentos o números" pattern="[A-Za-z ]+"></td>
                      </tr>
                      <tr class="espacio"> 
                      <td align="right"> <label for="imagen">Imagen:</label></td><td><input type="file" class="form-control-file my-2" name="imagen" required id="imagen" placeholder="Selecciona una imagen del Producto"></td>
                      </tr>
                      <tr class="espacio"> 
                      <td align="right"> <label for="existencia">Cantidad en existencia:</label></td><td><input type="number" class="form-control my-2" name="existencia" id="existencia" placeholder="Ingresa la cantidad en existencia del producto" required min="1" max="30" autocomplete="off" title="Escribe la cantidad en existencia"></td>
                      </tr>
                      <tr class="espacio"> 
                      <td align="right"> <label for="precioVenta">Precio unitario: $</label></td><td><input type="number" class="form-control my-2" name="precioVenta" id="precioVenta" placeholder="Ingresa el precio unitario" required autocomplete="off" title="Escribe el precio de este producto Ej: 215.50" min="100" step="0.01" max="1500"></td>
                      </tr>
                      <tr>
                      <td align="center" colspan="2"><input type="submit"  name="registrar" class="btn btn-primary" value="Registrar"  title="Registrar"></td>
                      </tr>
                      </form>
                      </table>
                      </div>
                      </div>
          </div>
        </div>
      <?php } ?>
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
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
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
              <a class="dropdown-item text-primary" href="registrar_producto.php">Registrar</a>
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
<h3 class="text-center text-primary my-5"><b>Consulta Tus Productos</b></h3>
    <form action="#" method="post" id="frmbuscar">
      <div class="container text-center">
        <div>
          <div class="card d-inline-block">
          <h5 class="card-header">Buscar Producto</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Descripción del Producto" name="descripcion" id="descripcion" autocomplete="off">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">Buscar</button>
              </span>
            </div>
          </div>
        </div>
          </div>
        </div>
        </form>

        <?php 
          if(isset($_POST['descripcion']) ){
            require_once("../conexion/conexion.php");
            $sql = "SELECT * FROM productos, proveedor WHERE productos.descripcion LIKE '$_POST[descripcion]%'
            AND productos.ID_proveedor = proveedor.ID_proveedor ORDER BY nombreProveedor";
            $result = mysqli_query($link, $sql);
            $contar = mysqli_num_rows($result);
            if ($contar == 0) { ?>
              <h1 class="display-4 text-center">No se encontró el Producto</h1>
              <?php
            } else {
         ?>

      <h3 class=" text-center text-primary my-5 mx-5"><b>Productos Registrados</b></h3>
      <div class="container">
        <div class="table-responsive-sm">
          <table class="table text-center table-bordered table-hover table-sm">
            <thead class="bg-primary text-white">
    <tr>
      <th scope="col">Proveedor</th>
      <th scope="col">Descripción</th>
      <th scope="col">Imagen</th>
      <th scope="col">Existencia</th>
      <th scope="col">Precio de Venta</th>
      <th scope="col">Número de Grupo</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
    <?php 
        while ( $fila = mysqli_fetch_array($result)) {
     ?>
     <tbody class="text-center">
     <tr>
      <?php $codigoProducto = $fila['codigoProducto'] ?>
      <td><?php echo $fila['nombreProveedor'] ?></td>
      <td><?php echo $fila['descripcion'] ?></td>
      <td><img src="
        <?php echo '../'.$fila['imagen'] ?>
        "width="100"></td>
      <td><?php echo $fila['existencia'] ?></td>
      <td><?php echo $fila['precioVenta'] ?></td>
      <td><?php echo $fila['numGrupo'] ?></td>
      <?php echo "
      <td class='active'><a href='modificar.php?codigoProducto=$codigoProducto'>
      <img  width='32px' height='32px' src='../images/editar.png'/>
      </a></td>
      <td>
        <a onClick='confirmar_eliminacion($codigoProducto)'>
          <img width='32px' height='32px' src='../images/eliminar.png'/>
        </a>
      </td>
      ";
      ?>
     </tr>
     </tbody>
     <?php 
    }
      ?>
  </table>
        </div>
      </div>

    <?php 
    } }?>

   <footer class="py-5 bg-light">
      <div class="container">
    <div class="row">
      <div class="col-lg-1.5 mb-4">
        <div>
        <div>
        <a href="../index.php">
          <img src="../images/Logotipo.png" height="216" width="160">
        </a>
          </div>
        </div>
      </div>
      <div class="col-lg-1.5 mb-4 mx-2">
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
          <a href="../other/nosotros.php" class="text-primary">¿Quienes somos?</a>
          <br>
           <a href="../other/contact.php">Contáctanos</a>
         </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-2.5 mb-4 mx-5">
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

   <script language="javascript"> 
    function confirmar_eliminacion(codigoProducto){
    var aceptar=confirm("\u00bfRealmente deseas eliminar el registro?"); 
    if (aceptar) 
    {
    document.location="eliminar_producto.php?opcion="+codigoProducto;
    }
    else{
    
     return false;
  }

    }
    </script>

</body>

</html>
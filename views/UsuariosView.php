<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="css/album.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/estilo_index.css" />
    <link rel="stylesheet" href="css/style-slider.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/font-icon.js"></script>
    <title>Lista usuario</title>
  </head>
  <body>
    <?php
      require_once('views/menuView.php');
    ?>
    <hr>
    <div class="container py-5">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb separador">
          <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
          <li class="breadcrumb-item active" aria-current="page">Carrito</li>
        </ol>
      </nav>

      <div class="row">
        <div class="col-md-12">
          <button type="button" class="btn btn-success">Nuevo usuario</button>
          <br>
          <table class="table table-bordered">
            <thead class="text-center">
              <tr>
                <th scope="col">Nombre / Apellido</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Tipo de usuario</th>
                <th scope="col">Monto</th>
                <th scope="col">Fecha de registro</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach($datos as $dato){
                  echo "<tr>";
                  echo "<td class='text-center'>".$dato['Name']." ".$dato['Lastname'] ."</td>";
                  echo "<td class='text-center'>".$dato['Cellphone'] ."</td>";
                  echo "<td class='text-center'>".$dato['Email'] ."</td>";
                  echo "<td class='text-center'>".$dato['User_type'] ."</td>";
                  echo "<td class='text-center'>".$dato['Amount'] ."</td>";
                  echo "<td class='text-center'>".$dato['Registration_date'] ."</td>";
                  echo "<td class='text-center'>";
                  echo "<a href='?c=Editar_Usuario&id=".$dato['Id_user']."' class='btn btn-primary'>Editar</a> \t";
                  echo "<button type='button' class='btn btn-danger'>Eliminar</button>";
                  echo "</td>";
                  echo "</tr>";

                  
                }
              ?>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
    <!-- Page Content -->
    <section class="py-5 footer">
      <!-- <hr> -->
      <div class="container">
        <!-- Footer Text -->
        <div class="container-fluid text-center text-md-left">
          <!-- Grid row -->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">
              <!-- Content -->
              <img src="img/clothing-store-logo-footer.png" alt="logo" />
            </div>
            <!-- Grid column -->
            <hr class="clearfix w-100 d-md-none pb-3" />
            <!-- Grid column -->
            <div class="col-md-6 mb-md-0 mb-3">
              <!-- Content -->
              <nav
                class="navbar navbar-expand-lg justify-content-center"
                id="footer-nav"
              >
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.html">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="productos.html">Productos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="nosotros.html">Nosotros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contacto.html">Contacto</a>
                  </li>
                </ul>
              </nav>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
        <!-- Footer Text -->
        <hr class="clearfix w-100 d-md-none pb-3" />
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
          © 2020 Copyright | <span class="footer-text">Clothing Store</span>
        </div>
      </div>
    </section>
  </body>
</html>

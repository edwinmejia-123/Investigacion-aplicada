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
          <li class="breadcrumb-item active" aria-current="page">Lista Usuarios</li>
        </ol>
      </nav>
        <?php
          if(isset($correcto)){
              echo '<div class="alert alert-success text-center" role="alert">';
              echo $correcto;
              echo '</div>';
            }
          if(isset($respuesta)){
              echo '<div class="alert alert-danger text-center" role="alert">';
              echo $respuesta;
              echo '</div>';
            }
          unset($correcto,$respuesta);
        ?>
          
          
      
      <div class="row">
        <div class="col-md-12">
          <a type="button" href="usuarios.php?c=Insertar_Usuario"  class="btn btn-success"><i class="fas fa-user-plus"></i> Nuevo usuario</a>
          <br>
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
                  echo "<td class='text-center'>$".$dato['Amount'] ."</td>";
                  echo "<td class='text-center'>".$dato['Registration_date'] ."</td>";
                  echo "<td class='text-center'>";
                  echo "<a href='?c=Buscar_Usuario&id=".$dato['Id_user']."' class='btn btn-primary'><i class='fas fa-user-edit'></i> Editar</a> \t";
                  echo "<a href='?c=Eliminar_Usuario&id=".$dato['Id_user']."' type='button' class='btn btn-danger'><i class='fas fa-user-minus'></i> Eliminar</a>";
                  echo "</td>";
                  echo "</tr>";
                }
                unset($datos, $dato);
              ?>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <?php
      require_once('views/footerView.php');
    ?>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="css/album.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/estilo_index.css">
    <link rel="stylesheet" href="css/style-slider.css">
    <link rel="stylesheet" href="css/fonts.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/font-icon.js"></script>
    <title>Editar usuario</title>
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
              <li class="breadcrumb-item active" aria-current="page">Editar Usuario</li>
            </ol>
        </nav>
        <?php
            foreach ($datos as $dato) {
                
            
        ?>
        <form class="needs-validation" method="POST" action="usuarios.php?c=Editar_Usuario&id=<?php echo $id; ?>">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="validationCustom01">Nombres</label>
                    <input type="text" class="form-control" name="nombre" value="<?php echo $dato['Name']; ?>" id="validationCustom01"  placeholder="Nombre" required>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="validationCustom02">Apellidos</label>
                    <input type="text" class="form-control" name="apellido" value="<?php echo $dato['Lastname']; ?>" id="validationCustom02"  placeholder="Apellido" required>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="validationCustom03">Telefono</label>
                    <input type="text" class="form-control" name="telefono" value="<?php echo $dato['Cellphone']; ?>" id="validationCustom03"  placeholder="Telefono" required>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="validationCustom04">Correo</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $dato['Email']; ?>" id="validationCustom04"  placeholder="ejemplo@ejemplo.com" required>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="validationCustom05">Tipo Usuario</label>
                    <input type="text" class="form-control" name="tipo" value="<?php echo $dato['User_type']; ?>" id="validationCustom05"  placeholder="Tipo Usuario" required>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                </div>
                <div class="form-group col-md-2">
                    <label for="validationCustom06">Monto</label>
                    <input type="number" class="form-control" name="monto" value="<?php echo $dato['Amount']; ?>" id="validationCustom06"  placeholder="$0.00" required>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="validationCustom07">Fecha</label>
                    <input type="date" class="form-control" name="fecha" value="<?php echo $dato['Registration_date']; ?>" id="validationCustom07"  required>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                </div>
            </div>
            <button class="btn btn-outline-info" type="submit">Enviar</button>
        </form>
        <?php
            }
        ?>
        <br><br>
        <div class="col-md-8">
                <?php
                    if (isset($respuesta)) {
                        echo '<div class="alert alert-danger text-center" role="alert">';
                        if (gettype($respuesta) == 'array') {
                            foreach ($respuesta as $valor) {
                                echo $valor. "\n <br>" ;
                            }
                            unset($valor);
                            unset($respuesta);
                        }else {
                            echo  $respuesta;
                        }
                        echo '</div>';
                    }
                    
                ?>
            
        </div>
    </div>

    <?php
      require_once('views/footerView.php');
    ?>
    <script src="js/validationform.js"></script>
</body>
</html>
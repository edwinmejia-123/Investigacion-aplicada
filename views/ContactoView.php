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
    <title>Clothing Store | Contacto</title>
</head>
<body>
    <?php
      require_once('views/menuView.php');
    ?>

    <div class="container py-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb separador">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Contacto</li>
            </ol>
        </nav>

        <form class="needs-validation" novalidate>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="validationCustom01">Nombres</label>
                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="validationCustom02">Apellidos</label>
                    <input type="text" class="form-control" id="validationCustom02" value="" required>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                    </div>
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                      Porfavor ingrese su correo electrónico.
                    </div>
                  </div>
            </div>
            <div class="form-group">
                <label for="">Mensaje</label>
                <textarea class="form-control" id="" rows="3"></textarea>
            </div>
            <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                  <label class="form-check-label" for="invalidCheck">
                    Acepta los términos y condiciones
                  </label>
                  <div class="invalid-feedback">
                    Debes estar de acuerdo antes de enviar.
                  </div>
                </div>
              </div>
            <button class="btn btn-outline-info" type="submit">Enviar</button>
        </form>
    </div>

    <?php
      require_once('views/footerView.php');
    ?>
    <script src="js/validationform.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/imagen.css" />
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/font-icon.js"></script>
    <title>Index</title>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="css/album.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/estilo_index.css" />
    <link rel="stylesheet" href="css/style-slider.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    
  </head>
  <body>
    <?php
      require_once('views/menuView.php');
    ?>

    <!-- SLIDER -->
    <header>
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleIndicators"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div
            class="carousel-item active"
            style="background-image: url(img/slide-01.jpg)"
          >
            <div class="carousel-caption d-none d-md-block">
              <div class="container" id="texto-slider">
                <h1>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Culpa repellendus quasi enim commodi ab iste
                </h1>
                <p>
                  <a class="btn btn-outline-info btn-sm" role="button" href="#"
                    >Comprar</a
                  >
                </p>
              </div>
            </div>
          </div>

          <div
            class="carousel-item"
            style="background-image: url(img/slide-02.jpg)"
          >
            <div class="carousel-caption d-none d-md-block">
              <div class="container" id="texto-slider">
                <h1>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Culpa repellendus quasi enim commodi ab iste
                </h1>
                <p>
                  <a class="btn btn-outline-info btn-sm" role="button" href="#"
                    >Comprar</a
                  >
                </p>
              </div>
            </div>
          </div>

          <div
            class="carousel-item"
            style="background-image: url(img/slide-03.jpg)"
          >
            <div class="carousel-caption d-none d-md-block">
              <div class="container" id="texto-slider">
                <h1>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Culpa repellendus quasi enim commodi ab iste
                </h1>
                <p>
                  <a class="btn btn-outline-info btn-sm" role="button" href="#"
                    >Comprar</a
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
    <!--MODAL-->
    <div
      class="modal fade bd-example-modal-xl"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row row-cols-2">
              <div class="col">
                <div id="modal-img" class="text-center"></div>
              </div>
              <div class="col">
                <b><div class="h5" id="titulo"></div></b>
                <b><div class="h6" id="precio"></div></b>

                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Deleniti amet debitis eos ipsam optio? Modi sit distinctio
                  consequatur perferendis libero vitae mollitia cumque iste
                  dolores, minima tempora at perspiciatis ea.
                </p>
                <br />
                <div class="container">
                  <form>
                    <div class="form-group row">
                      <label
                        for="talla"
                        class="col-sm-2 col-form-label col-form-label"
                        >Talla</label
                      >

                      <div class="col-sm-10">
                        <select class="form-control form-control" id="talla">
                          <option>Seleccione talla</option>
                          <option>Size S</option>
                          <option>Size M</option>
                          <option>Size L</option>
                          <option>Size XL</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="color"
                        class="col-sm-2 col-form-label col-form-label"
                        >Color</label
                      >

                      <div class="col-sm-10">
                        <select class="form-control form-control" id="color">
                          <option>Seleccione color</option>
                          <option>Red</option>
                          <option>Blue</option>
                          <option>White</option>
                          <option>Grey</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="row align-items-center">
                        <div class="col">
                          <label
                            for="Cantidad"
                            class="col-sm-2 col-form-label col-form-label"
                            >Cantidad</label
                          >
                        </div>
                        <div class="col">
                          <input
                            type="number"
                            class="form-control"
                            id="Cantidad"
                            min="1"
                          />
                        </div>
                        <div class="col">
                          <button type="button" class="btn btn-primary">
                            Agregar al carro
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CONTENIDO DE INDEX -->
    <div class="container py-5">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
          <!-- <li class="breadcrumb-item active" aria-current="page">Library</li> -->
        </ol>
      </nav>

      <div>
        <h3 class="tema-index">PRODUCTOS NUEVOS</h3>
      </div>

      <div class="row">
        <div class="col-md-4" id="1">
          <div class="card mb-4 shadow-sm">
            <img
              src="img/product-11.jpg"
              class="card-img-top imagen"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title titulo">Herschel supply</h5>
              <p class="card-text precio">$63.16</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button
                    type="button"
                    class="btn btn-outline-info btn-sm enlace"
                    value="1"
                    data-toggle="modal"
                    data-target=".bd-example-modal-xl"
                  >
                    View
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" id="2">
          <div class="card mb-4 shadow-sm">
            <img
              src="img/product-12.jpg"
              class="card-img-top imagen"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title titulo">Herschel supply</h5>
              <p class="card-text precio">$63.15</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button
                    type="button"
                    class="btn btn-outline-info btn-sm enlace"
                    value="2"
                    data-toggle="modal"
                    data-target=".bd-example-modal-xl"
                  >
                    View
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4" id="3">
          <div class="card mb-4 shadow-sm">
            <img
              src="img/product-13.jpg"
              class="card-img-top imagen"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title titulo">T-Shirt with Sleeve</h5>
              <p class="card-text precio">$18.49</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button
                    type="button"
                    class="btn btn-outline-info btn-sm enlace"
                    value="3"
                    data-toggle="modal"
                    data-target=".bd-example-modal-xl"
                  >
                    View
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4" id="4">
          <div class="card mb-4 shadow-sm">
            <img
              src="img/product-14.jpg"
              class="card-img-top imagen"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title titulo">Pretty Little Thing</h5>
              <p class="card-text precio">$54.79</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button
                    type="button"
                    class="btn btn-outline-info btn-sm enlace"
                    value="4"
                    data-toggle="modal"
                    data-target=".bd-example-modal-xl"
                  >
                    View
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" id="5">
          <div class="card mb-4 shadow-sm">
            <img
              src="img/product-15.jpg"
              class="card-img-top imagen"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title titulo">Mini Silver Mesh Watch</h5>
              <p class="card-text precio">$86.85</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button
                    type="button"
                    class="btn btn-outline-info btn-sm enlace"
                    value="5"
                    data-toggle="modal"
                    data-target=".bd-example-modal-xl"
                  >
                    View
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4" id="6">
          <div class="card mb-4 shadow-sm">
            <img
              src="img/product-16.jpg"
              class="card-img-top imagen"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title titulo">Square Neck Back</h5>
              <p class="card-text precio">$29.64</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button
                    type="button"
                    class="btn btn-outline-info btn-sm enlace"
                    value="6"
                    data-toggle="modal"
                    data-target=".bd-example-modal-xl"
                  >
                    View
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/modal.js"></script>
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
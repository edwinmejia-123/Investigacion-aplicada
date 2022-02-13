<nav class="navbar navbar-expand-lg navbar-light">
      <!-- LOGO -->
      <!-- Se muestra solo en pantallas pequeñas a la izquierda del menu -->
      <div class="d-block d-sm-none d-sm-block d-md-block d-lg-none">
        <img
          src="img/logo-banco.png"
          class="d-inline-block align-top"
          alt="logo"
          width="100px" height="50px"
        />
      </div>

      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" id="nav-principal">
          <li class="nav-item">
            <a class="nav-link" href="index.php"
              ><i class="fas fa-home"></i> Inicio</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="usuarios.php?c=Listar_Usuario"
              ><i class="fas fa-duotone fa-users"></i> Usuarios</a
            >
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="usuarios.php?c=Insertar_Usuario"
              ><i class="fas fa-sólido fa-plus"></i> Insertar Usuario</a
            >
          </li>
        </ul>
        <!-- LOGO -->
        <!-- Se muestra en pantallas grandes al centro del menu -->
        <div class="d-none d-lg-block">
          <a class="navbar-brand" href="index.html">
            <img
              src="img/logo-banco.png"
              class="d-inline-block align-top"
              alt="logo"
              width="150px" height="70px"
            />
          </a>
        </div>
        <ul class="navbar-nav ml-auto" id="nav-principal">
          <li class="nav-item">
            <a class="nav-link" href="nosotros.html"
              ><i class="fas fa-book"></i> Nosotros</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.html"
              ><i class="fas fa-envelope"></i> Contacto</a
            >
          </li>
        </ul>

        <!-- BUSCADOR -->
        <form class="form-inline my-2 my-lg-0">
          <input
            class="form-control mr-sm-2"
            type="search"
            placeholder="Buscar"
            aria-label="Search"
          />
          <button class="btn btn-outline-info my-2 my-sm-0" type="submit">
            Buscar
          </button>
        </form>
      </div>
    </nav>
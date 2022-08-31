<!DOCTYPE html>
<html lang="es">


<!-- Cabecera -->
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Título de la vista de manera dinámica -->
  <title>@yield('Titulo')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Iconos de favicons -->
  <link rel="icon" href="{{ asset('assets/img/hoja.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">

  <!-- Fuentes de Google -->
  <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700') }}">
  <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap') }}">
  <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css2?family=PT+Serif&family=Roboto+Slab:wght@300&display=swap') }}"> 

  <!-- Archivos CSS Vendor -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<!-- Fin de cabecera -->

<!-- Cuerpo -->
<body>

  <!-- Navegación -->
  @include('partials.navegacion')

  <!-- Sección principal -->
  <main id="main">
    <section class="section-footer">
      <!-- Sección de contenido principal -->
      @yield('Contenido')
    </section>  
  </main>
  <!-- Fin de la sección principal -->

  <!-- Pie de página -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <!-- Columna de información -->
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Bio Paisajes</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                Enim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat duis
                sed aute irure.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Correo .</span> contact@example.com
                </li>
                <li class="color-a">
                  <span class="color-text-a">Teléfono .</span> +54 356 945234
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- fin de columna de información -->

        <!-- Columna de la compañia -->
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">La Compañía</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Ubicación</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Representante</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- fin de la columna de la compañia-->

        <!-- Columna de sitios de internet -->
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Sitios de Interés</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Pasto</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Tierra</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- fin de la columna de sitios de internet --> 
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="{{ route('Inicio') }}">Inicio</a>
              </li>
              <li class="list-inline-item">
                <a href="{{ route('Trabajos') }}">Trabajos</a>
              </li>
              <li class="list-inline-item">
                <a href="{{ route('Servicios') }}">Servicios</a>
              </li>
              <li class="list-inline-item">
                <a href="{{ route('Clientes') }}">Clientes</a>
              </li>
              <li class="list-inline-item">
                <a href="{{ route('Contacto') }}">Contácto</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">Bio Paisajes</span> All Rights Reserved.
            </p>
          </div>
          <!--
          <div class="credits">
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          -->
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Fin del pie de página -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>


  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
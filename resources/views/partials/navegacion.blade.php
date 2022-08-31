<!-- Barra de navegación -->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <!-- Botón responsive -->
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <!-- Título de página -->
      <a class="navbar-brand text-brand" href="{{ route('Inicio') }}">BIO<span class="color-b">PAISAJES</span></a>

      <!-- Menú de navegación -->
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ setActive('Inicio') }}" href="/"><span class="color-b">I</span>nicio</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ setActive('Trabajos') }}" href="trabajos"><span class="color-b">T</span>rabajos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ setActive('Servicios') }}" href="{{ route('Servicios') }}"><span class="color-b">S</span>ervicios</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ setActive('Clientes') }}" href="{{ route('Clientes') }}"><span class="color-b">N</span>uestros clientes</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ setActive('Contacto') }}" href="{{ route('Contacto') }}"><span class="color-b">C</span>ontáctanos</a>
          </li>
        </ul>
      </div>
    </div> 
  </nav>
  <!-- Fin de barra de navegación -->
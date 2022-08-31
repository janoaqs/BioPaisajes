@extends('plantilla')
<!-- Título de la vista -->
@section('Titulo','Inicio')
<!-- Contenido principal -->
@section('Contenido')
<!-- Carrusel de imágenes -->
<div class="intro intro-carousel swiper position-relative">
  <div class="swiper-wrapper">
    <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/carrusel_1.jpeg)">
      <div class="overlay overlay-a"></div>
      <div class="intro-content display-table">
        <div class="table-cell">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="intro-body">
                  <p class="intro-title-top">Concepción
                    <br> 78345
                  </p>
                  <h1 class="intro-title mb-4 ">
                    <span class="color-b">M</span>antenciones
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/carrusel_2.jpeg)">
      <div class="overlay overlay-a"></div>
      <div class="intro-content display-table">
        <div class="table-cell">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="intro-body">
                  <p class="intro-title-top">Concepción
                    <br> 78345
                  </p>
                  <h1 class="intro-title mb-4 ">
                    <span class="color-b">R</span>estauración de áreas verdes
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/carrusel_3.jpeg)">
      <div class="overlay overlay-a"></div>
      <div class="intro-content display-table">
        <div class="table-cell">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="intro-body">
                  <p class="intro-title-top">Concepción
                    <br> 78345
                  </p>
                  <h1 class="intro-title mb-4 ">
                    <span class="color-b">S</span>ervicio de jardinería
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-pagination"></div>
</div>
  <!-- Fin de carrusel de imágenes -->
@endsection
@extends('layouts.vistafooter')

@section('contenidoFinal')

@endsection
@extends('layouts.vistapadre')

@section('contenidoPrincipal')
<div id="carouselExample" class="carousel slide custom-carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('img/5.jpeg')}}" class="d-block custom-image" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/1.jpeg" class="d-block custom-image" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/2.jpeg" class="d-block custom-image" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<style>
  .custom-carousel {
    max-width: 700px; /* Ancho deseado para el carrusel */
    margin: 100px auto 0; /* Agrega margen superior de 20px para separar del navbar y centra el carrusel horizontalmente */
}

.custom-image {
    max-width: 100%; /* Ajusta el ancho máximo de las imágenes al 100% del carrusel */
    height: auto; /* Permite que la altura se ajuste automáticamente según el ancho */
}
</style>
@endsection




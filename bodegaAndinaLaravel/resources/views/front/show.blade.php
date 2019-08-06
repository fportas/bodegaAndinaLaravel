@extends('front.template')

@section('pageTitle', 'Productos')

@section('link_style')

  <link rel="stylesheet" href="/css/app.css">

  <link rel="stylesheet" href="/css/styles.css">

    <link rel="stylesheet" href="/css/preguntas-frecuentes.css">

    <link rel="stylesheet" href="/css/products.css">

  {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}


@endsection

@section('navbar')
  <div class="cualquiernombre">
    @include('front.navbar')
  </div>
@endsection


@section('header')
  <div class="titulo-productos">

    <h2>Nuestros Productos</h2>

  </div>
@endsection

@section('mainContent')
    <div class="container-productos">
      {{-- <div class="container-productos"> --}}
      <div class="preguntas-body">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="..." class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>



          <div class="preguntas-pedido ventanaProducto">
            <img src="{{ $product->image }}" class="botella">
            <h3>{{ $product->name }}</h3>
            {{-- <p>{{ $product->varietal->name }}</p> --}}
            <p>{{ $product->spec }}</p>
            <strong><p class="precio">$ {{ $product->price }}</p></strong>
            <a href="/show" name="button" class="comprar">Ver más</a>
          </div>




      </div>

    </div>

@endsection

@section('secondContent')



@endsection

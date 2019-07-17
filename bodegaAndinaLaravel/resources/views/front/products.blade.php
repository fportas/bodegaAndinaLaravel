@extends('front.template')

@section('pageTitle', 'Productos')

@section('link_style')

  <link rel="stylesheet" href="/css/app.css">

  <link rel="stylesheet" href="/css/styles.css">

  <link rel="stylesheet" href="/css/preguntas-frecuentes.css">

@endsection

@section('navbar')
  <div class="cualquiernombre">
    @include('front.navbar')
  </div>
@endsection


@section('mainContent')
  <div class="titulo-productos">
    <h2>Nuestros Productos</h2>
  </div>
@endsection

@section('secondContent')
  <div class="container-productos">
    <div class="preguntas-body">

      {{-- <ul>
        @foreach ($products as $product)
          <li>
            <h3>{{ $product->prod_name }}</h3>
          </li>
          <li>
            <h3>{{ $product->varietal }}</h3>
          </li>
          <li>
            <p>{{ $product->spec }}</p>
          </li>
          <li>
            <p>${{ $product->price }}</p>
          </li>
        @endforeach
      </ul> --}}

      @foreach ($products as $product)
        <div class="preguntas-pedido ventanaProducto">
          <img src="{{ $product->pic }}" class="botella">
          <h3>{{ $product->prod_name }}</h3>
          <p>{{ $product->varietal }}</p>
          <p>{{ $product->spec }}</p>
          <p class="precio">$ {{ $product->price }}</p>
        </div>
      @endforeach



     {{-- <div class="preguntas-pedido ventanaProducto">
       <img src="/images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
       <h3>Vino .....</h3>
       <p>Lorem ipsum dolor sit amet, consectetur</p>
       <p class="precio">$780</p>
     </div> --}}



    </div>

  </div>

@endsection

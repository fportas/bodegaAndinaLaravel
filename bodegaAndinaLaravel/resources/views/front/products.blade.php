@extends('front.template')

@section('pageTitle', 'Productos')

@section('link_style')

  <link rel="stylesheet" href="/css/app.css">

  <link rel="stylesheet" href="/css/styles.css">

  <link rel="stylesheet" href="/css/preguntas-frecuentes.css">

@endsection


@section('mainContent')
  <div class="titulo-productos">
    <h2>Nuestros Productos</h2>
  </div>
@endsection

@section('secondContent')
  <div class="container-productos">
    <div class="preguntas-body">



     <div class="preguntas-pedido ventanaProducto">
       <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
       <h3>Vino ....</h3>
       <p>Lorem ipsum dolor sit amet, consectetur</p>
       <p class="precio">$780</p>
     </div>

     <div class="preguntas-pedido ventanaProducto">
       <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
       <h3>Vino ....</h3>
       <p>Lorem ipsum dolor sit amet, consectetur</p>
       <p class="precio">$630</p>
     </div>

     <div class="preguntas-pedido ventanaProducto">
       <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
       <h3>Vino ....</h3>
       <p>Lorem ipsum dolor sit amet, consectetur</p>
       <p class="precio">$723</p>
     </div>

     <div class="preguntas-pedido ventanaProducto">
       <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
       <h3>Vino ....</h3>
       <p>Lorem ipsum dolor sit amet, consectetur</p>
       <p class="precio">$723</p>
     </div>


    </div>

    <div class="preguntas-body2">
      <div class="preguntas-pedido ventanaProducto">
        <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
        <h3>Vino ....</h3>
        <p>Lorem ipsum dolor sit amet, consectetur</p>
        <p class="precio">$540</p>
      </div>

      <div class="preguntas-pedido ventanaProducto">
        <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
        <h3>Vino ....</h3>
        <p>Lorem ipsum dolor sit amet, consectetur</p>
        <p class="precio">$230</p>
      </div>

      <div class="preguntas-pedido ventanaProducto">
        <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
        <h3>Vino ....</h3>
        <p>Lorem ipsum dolor sit amet, consectetur</p>
        <p class="precio">$180</p>
      </div>

      <div class="preguntas-pedido ventanaProducto">
        <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
        <h3>Vino ....</h3>
        <p>Lorem ipsum dolor sit amet, consectetur</p>
        <p class="precio">$180</p>
      </div>
    </div> <!-- cierro preguntas body -->

  </div>

@endsection

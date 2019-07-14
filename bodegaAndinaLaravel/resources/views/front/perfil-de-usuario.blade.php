@extends('front.template')

@section('pageTitle', 'Perfil')

@section('link_style')

  {{-- <link rel="stylesheet" href="/css/app.css"> --}}

  <link rel="stylesheet" href="/css/styles.css">

  <link rel="stylesheet" href="/css/perfil-de-usuario.css">

@endsection


@section('optional1')

@endsection


@section('navbar')

  <header class="header-register">

    <div class="logo-register">
      <img src="images/logo-principal.png" alt="Bodega Andina" >
    </div>

    @include('front.navbar')

  </header>

@endsection



@section('mainContent')

  <div class="titulo">
    <h1>Bienvenid@ </h1>
  </div>
  <center><img src="data/avatars/default.jpg" class="avatar" alt=""></center>

@endsection


@section('secondContent')
  <div class="cuadra"><center>
    <div class="line1">

      <div class="servicios">
        <a title="Envios" href="http://www.google.com"><img src="images/icons/icon-envios.png" alt="Envios" /></a>
        <h3>Seguimiento de entrega</h3>
      </div>

      <div class="servicios">
        <a title="Lista" href="http://www.google.com"><img src="images/icons/icon-lista.png" alt="Lista" /></a>
        <h3>Mis pedidos</h3>
      </div>

    </div>

    <div class="line2">

      <div class="servicios">
        <a title="Pagos" href="http://www.google.com"><img src="images/icons/icon-tarjeta-dorada.png" alt="Pagos" /></a>
        <h3>Mis pagos</h3>
      </div>

      <div class="servicios">
        <a title="Shop" href="http://www.google.com"><img src="images/icons/icon-carrito.png" alt="Shop" /></a>
        <h3>Shop online</h3>
      </div></center>


    </div>

  </div>


@endsection

@section('thirdContent')

@endsection

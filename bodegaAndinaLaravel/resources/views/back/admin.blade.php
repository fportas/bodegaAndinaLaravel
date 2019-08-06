@extends('front.template')

@section('pageTitle', 'Administrador de Productos')

@section('link_style')

  <link rel="stylesheet" href="/css/app.css">

  <link rel="stylesheet" href="/css/styles.css">

  <link rel="stylesheet" href="/css/preguntas-frecuentes.css">

  <link rel="stylesheet" href="/css/admin.css">



@endsection

@section('navbar')
  <div class="cualquiernombre">
    @include('front.navbar')
  </div>
@endsection

@section('mainContent')

  <div class="titulo-productos">

    <h2>Nuestros Productos</h2>

    <h3>Hola Admin</h3>

  </div>

@endsection

@section('secondContent')
  <div class="container-productos">

    <div class="preguntas-body">

      <a href="/create" type="button" name="button" class="btn alert-secondary">Crear Vino</a>

    </div>

  </div>


@endsection

@section('thirdContent')

  <div class="container-productos">

    <div class="preguntas-body">

      @foreach ($adminProducts as $adminProduct)
        <div class="preguntas-pedido ventanaProducto">
          <img src="/storage/vinos/{{ $adminProduct->image }}" class="botella">
          <h3>{{ $adminProduct->name }}</h3>
          <p>{{ $adminProduct->varietal->name }}</p>
          <p>{{ $adminProduct->spec }}</p>
          <strong><p class="precio">$ {{ $adminProduct->price }}</p></strong>
          <a href="/admin/{id}/edit" type="button" name="button" class="btn alert-secondary">Ver mas</a>
          <form action="/admin/{{ $adminProduct->id }}" method="post">
            @csrf
            {{ method_field('delete') }}
            <button type="submit" class="btn btn-warning">BORRAR</button>
          </form>
        </div>
      @endforeach

    </div>

  </div>

@endsection

{{-- Perfil de usuario de Laravel --}}

{{-- @extends('layouts.app') --}}
@extends('front.template')


@section('pageTitle', 'Perfil de Usuario')


@section('link_style')

  <link rel="stylesheet" href="/css/app.css">

  <link rel="stylesheet" href="/css/styles.css">

  <link rel="stylesheet" href="/css/perfil-de-usuario.css">

@endsection


@section('navbar')
  <header class="header-register">

    <div class="logo-register">
      <img src="images/logo-principal.png" alt="Bodega Andina">

    </div>

    @include('front.navbar')

  </header>
@endsection


@section('mainContent')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenid@</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Estas logueado Campe@n!!!
                </div>
                {{--<img src="/storage/avatars/{{ $user->avatar }}" alt="">--}}
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ultimos pedidos</div>
                {{-- @foreach ($users as $user)
                  <div class="card-body">
                    <p>{{ $user->bill }}</p>
                  </div>
                @endforeach --}}
            </div>
        </div>
    </div>
</div>
@endsection

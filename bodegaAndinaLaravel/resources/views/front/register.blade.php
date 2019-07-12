@extends('front.template')

@section('pageTitle', 'Bodega Andina')

@section('link_style')

  <link rel="stylesheet" href="/css/app.css">

  <link rel="stylesheet" href="/css/styles.css">

  <link rel="stylesheet" href="/css/register.css">

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
  <section class="bg-login">

    <div class="img-iz">
      <!-- imagen de fondo -->
    </div>

    <article class="form">
      <h2 class="titulo-registro">Ingresa tus datos</h2>
      <!-- <form class="text" method="post" enctype="multipart/form-data" action="registrarUsuario.php"> -->
      <!-- <form class="text" method="post" enctype="multipart/form-data" action="perfil-de-usuario.php"> -->
      <form class="text" method="post" enctype="multipart/form-data">
        {{-- xXXXXXXX   TOQUEN   XXXXXXXx --}}
        @csrf
        {{-- xXXXXXXX   TOQUEN   XXXXXXXx --}}

        <!-- Nombre  -->
        <input
          class="login"
          type="text"
          name="name"
          value=""
          placeholder="Nombre completo"
        >
        <div class="showError">

        </div>

        <!-- Usuario -->
        <input
          class="login"
          type="text"
          name="user"
          value=""
          placeholder="Nombre de usuario"
        >
        <div class="showError">

        </div>

        <!-- País -->
        <select
          name="country"
          class="login" <?= isset($errorsInRegister['country']) ? 'showError' : null; ?>
        >
          <option value="">Elegí tu país de nacimiento</option>

            <option>

            </option>

        </select>
        <div class="showError">

        </div>


        <!-- Mail -->
        <input
          class="login"
          type="text"
          name="email"
          value=""
          placeholder="Correo electronico"
        >
        <div class="showError">

        </div>

        <!-- Check box de Es mayor -->

        <div class="form-check">
          <label class="form-check-label">
        <input
          class="login-check"
          type="checkbox"
          name="older"
          value=""
        >Soy mayor de 18 años
        </label>
        </div>
        <div class="showError">

        </div>

        <!-- elegir imagen de perfil  -->


        <input
          class="login-file"
          type="file"
          name="avatar"
          placeholder="Seleccione una imagen de prefil"
        >
        <div class="showError">

        </div>



        <!-- password -->
        <input
          class="login"
          type="password"
          name="password"
          value=""
          placeholder="Contraseña"
        >
        <div class="showError">

        </div>


        <!-- confirmar password -->

        <input
          class="login"
          type="password"
          name="rePassword"
          value=""
          placeholder="Confirme su contraseña"
        >
        <div class="showError">

        </div>




        <button
          class="boton-regi"
          type="submit"
          name="Registrarme">
            Registrarme
        </button>




      </form>



    </article>

  </section>

@endsection


@section('secondContent')


@endsection

@section('thirdContent')

@endsection

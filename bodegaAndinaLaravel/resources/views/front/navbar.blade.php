<a href="#" class="toggle-nav">
  <span class="ion-navicon-round"></span>
</a>

<nav class="main-nav">

  <div class="boton"><a href="/index">Home</a></div>
  <div class="boton"><a href="/productos/">Productos</a></div>
  {{-- <div class="boton"><a href="contacto.php">Contacto</a></div> --}}
  <div class="boton"><a href="preguntas-frecuentes.php">Preguntas</a></div>
  <div class="boton"><a href="/login"><strong>Clientes</strong></a></div>
  {{-- <div class="boton"><a href="/index">Cerrar sesión</a></div> --}}

  {{-- @if (Auth::check() && Auth::user()->isadmin === 1 )
    <div class="nav-perfil">
        <a href="admin">ADMINISTRADOR</a></li>
    </div>
  @endif

  @if (Auth::check())
    <div class="nav-perfil">
      <form class="" action="{{ route('logout') }}" method="post">

      </form>
      <ul>
        <li><strong>User: {{ Auth::user()->name }}</strong></li>
        {{-- <li><strong><a href="home">Editar Perfil</a></strong></li> --}}
        {{-- <li><button type="submit">{{ __('Cerrar sesión') }}</button></li> --}}

      {{-- </ul> --}}
    {{-- </div> --}}
  {{-- @endif --}} 


</nav>

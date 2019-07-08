<!DOCTYPE html>
<html lang="en" dir="ltr">

	<head>

		<meta charset="utf-8">

		<title> @yield('pageTitle') </title>

    @yield('link_style')


	</head>

	<body>
    <div class="container">
      {{-- Barra navegador --}}
      @yield('optional1')

      @yield('navbar')

      {{-- Contenido --}}
			@yield('mainContent')

      @yield('secondContent')

      @yield('thirdContent')

      @yield('fourthContent')
      {{-- Footer --}}
      @include('front.footer')
      {{-- Lugar para javaScript --}}
      @yield('javaScript')
      {{-- Evento para desplegar el menú --}}
      @include('front.despleMenuJs')

		</div>

	</body>

</html>

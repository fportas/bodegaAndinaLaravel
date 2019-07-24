<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rutas de front

// ruta al index
Route::get('/', function () {
  return view('front.index');
});

// ruta a productos
Route::get('/productos/', 'ProductosController@index');
// porque tiene dos barras el producto?

// ruta a registración
Route::get('/registrarme', function () {
  return view('front.register');
});

// ruta a perfil de usuario
// Cambiar a post
Route::get('/perfil-de-usuario', function () {
  return view('front.perfil-de-usuario');
});

Auth::routes();

Route::get('/home', 'HomeController@index')/*->name('home')*/;

// Route::get('/profile', function () {
// 	if (Auth::user()) {
// 		echo "Hola " . Auth::user()->name . "<br>";
// 		echo "<img src='/storage/avatars/" . Auth::user()->avatar . "' width='100' /><br>";
// 	} else {
// 		return redirect('/register');
// 	}
// })->name('profile');

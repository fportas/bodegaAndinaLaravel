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
Route::get('/home', function () {
  return view('front.index');
});

// ruta a productos
Route::get('/productos', 'ProductosController@index');

// ruta a registración
Route::get('/registrarme', function () {
  return view('front.register');
});

// ruta a perfil de usuario
// Cambiar a post
Route::get('/perfil-de-usuario', function () {
  return view('front.perfil-de-usuario');
});

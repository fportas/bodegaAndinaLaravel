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
Route::get('/index', function () {
  return view('front.index');
});

// ruta a productos
Route::get('/productos/', 'ProductosController@index');

Route::get('/show/{id}', 'ProductosController@show');


Route::get('/prodmalbec/', 'ProductosController@varietalMalbec');
// seguir trabajando

// ruta a index de admin
Route::get('/admin', 'AdminController@index')/*->middleware('isAdmin')*/;
// ruta a formulario de crear vino
Route::get('/create', 'AdminController@create');
// dispara el guardado en la bd
Route::post('/admin', 'AdminController@store');
// seek and destry del producto
Route::delete('/admin/{id}', 'AdminController@destroy');

Route::get('/show/{id}', 'AdminController@show');



Route::get('/admin/{id}/edit', 'AdminController@edit');


// ruta a registración
// Route::get('/registrarme', function () {
//   return view('front.register');
// });
// // ahora funcionan el register de laravel directamente
//
// // ruta a perfil de usuario
// // Cambiar a post
// Route::get('/perfil-de-usuario', function () {
//   return view('front.perfil-de-usuario');
// });



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

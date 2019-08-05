<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $adminProducts = Product::All();

      return view('back/admin', compact('adminProducts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $varietals = \App\Varietal::orderBy('id')->get();

      return view('back.create', compact('varietals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
  			// input_name => rules,
  			'name' => 'required | max:50',
  			'spec' => 'required | max:500',
  			'precie' => 'required | numeric',
  			'varietal_id' => 'required',
  			'image' => 'required | image'
  		], [
  			'required' => 'El campo :attribute es obligatorio',
  			'numeric' => 'El campo :attribute debe ser numérico',
  			'spec.max' => 'El :attribute debe contener máximo 500 carácteres',
  			'name.max' => 'El :attribute debe contener máximo 50 carácteres',
  			'image' => 'El :attribute puede subir formatos como jpg, jpeg, png'
  		]);

      $product = new Product;

      $product->name = $request->input('name');
      $product->spec = $request->input('spec');
      $product->precie = $request->input('precie');
      $product->varietal_id = $request->input('varietal_id');

      // Obtengo el archivo que viene en el formulario (Objeto de Laravel) que tiene a su vez el archivo de la imagen
      $image = $request->file('image'); // El value del atributo name del input file

      if ($image) {
        // Armo un nombre único para este archivo
        $imagenFinal = uniqid("win_") . "." . $imagen->extension();

        // Subo el archivo en la carpeta elegida
        $imagen->storePubliclyAs("public/vinos", $imagenFinal);

        // Le asigno la imagen a la película que guardamos
        $product->image = $imagenFinal;
      }

      $product->save();

      // 3. Redireccionamos SIEMPRE a una RUTA
      return redirect('/guardaprod');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
